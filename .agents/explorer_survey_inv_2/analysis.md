# Environment, Dev Server, and Automated Testing Analysis for Automatixes

**Author**: `explorer_survey_inv_2`  
**Date**: 2026-08-06  
**Scope**: Local dev server configuration (`dev-server.js`), testing infrastructure (`tests/`), node/PHP environment, and automated test setup for `/invoice-maker.php`.

---

## 1. Local Development Server Configuration (`dev-server.js`)

### 1.1 Architecture & Functionality
Since native PHP CLI is not installed in the Windows environment PATH (`php` is unavailable), local development and site previews are driven by a custom Express-based server in `dev-server.js`.

- **Entry Point**: `dev-server.js` (invoked via `node dev-server.js` or `npm start` / `npm run dev`).
- **Default Port**: `3000` (`http://localhost:3000`).
- **Static Assets**: Served from `/assets` via `express.static(path.join(__dirname, 'assets'))`.
- **Routing**:
  - Root `/` maps automatically to `/index.php`.
  - Extensionless paths (e.g. `/invoice-maker`) automatically append `.php` -> `/invoice-maker.php`.
  - Directly requesting `/invoice-maker.php` resolves to `invoice-maker.php` on disk.

### 1.2 PHP Inclusion & Stripping Logic
The server reads PHP files and emulates `include` / `require` tags recursively:
```javascript
function processPhpIncludes(filePath) {
    if (!fs.existsSync(filePath)) {
        return `<!-- File not found: ${filePath} -->`;
    }
    
    let content = fs.readFileSync(filePath, 'utf8');
    const includeRegex = /<\?php\s+(?:include|require|include_once|require_once)\s+['"]([^'"]+)['"]\s*;\s*\?>/g;
    
    content = content.replace(includeRegex, (match, includeFileName) => {
        const includePath = path.join(path.dirname(filePath), includeFileName);
        return processPhpIncludes(includePath);
    });
    
    return content;
}
```
After recursive inclusion, all remaining PHP tags are stripped to output clean HTML:
```javascript
htmlContent = htmlContent.replace(/<\?php[\s\S]*?(?:\?>|$)/g, '');
```

### 1.3 Critical Finding: `includeRegex` Edge Case
- **Observation**: Standard page header includes across the codebase (e.g. `index.php`, `about.php`, `contact.php`) use line 1 constructs like:
  ```php
  <?php $page_key = 'about'; include 'header.php'; ?>
  ```
- **Regex Issue**: The regular expression `/<\?php\s+(?:include|require|include_once|require_once)...` requires `include` to immediately follow `<?php\s+`. Because `$page_key = '...';` sits between `<?php` and `include`, the regex fails to match!
- **Impact**: When served via `dev-server.js`, line 1 is NOT matched by `includeRegex` and is subsequently stripped away by `htmlContent.replace(...)`. As a result, `header.php` (which contains CSS `<link>` tags, fonts, FontAwesome, Bootstrap, and header navigation) is omitted from the rendered HTML.
- **Recommendation for Implementer**: Update `dev-server.js`'s `includeRegex` to match `include`/`require` statements regardless of preceding variable assignments within the PHP tag, e.g.:
  ```javascript
  const includeRegex = /<\?php[\s\S]*?(?:include|require|include_once|require_once)\s+['"]([^'"]+)['"]\s*;[\s\S]*?\?>/g;
  ```
  or format page include statements in PHP files as separate PHP blocks:
  ```php
  <?php $page_key = 'invoice-maker'; ?>
  <?php include 'header.php'; ?>
  ```

---

## 2. Test Infrastructure & Project Dependencies

### 2.1 Runtime & Dependencies
- **Node Runtime**: Node.js `v24.18.0`.
- **`package.json`**:
  - Dependencies: `express` (`^4.19.2`), `cors` (`^2.8.5`).
- **`node_modules`**:
  - `playwright` (`v1.49+`) and `playwright-core` are installed and ready for headless browser automation.

### 2.2 Existing Test Scripts in `tests/`
The project features a dedicated `tests/` directory with headless browser test scripts using Playwright Chromium:
1. `tests/test-chat-toggle.js`: End-to-end verification script for n8n chat toggle lifecycle (opens chat via `#sticky-expert-btn`, closes via `#custom-chat-close`).
2. `tests/stress-test-chat-toggle.js`: 10-cycle sequential open/close stress test and rapid click race condition test harness.
3. `tests/debug-chat.js`: DOM tree inspector for `.chat-wrapper` elements.
4. `tests/inspect-dom.js`: Helper script for querying chat container DOM nodes.

---

## 3. Automated Test Execution Strategy for `/invoice-maker.php`

### 3.1 Test Prerequisites
1. Dev Server running: Executed in background via `node dev-server.js` listening on `http://localhost:3000`.
2. Target Page: `http://localhost:3000/invoice-maker.php`.

### 3.2 Automated Test Script Design (`tests/test-invoice-maker.js`)
To verify `/invoice-maker.php` automatically, a new Playwright test script (`tests/test-invoice-maker.js`) should execute the following test suites:

#### Suite 1: Vue 3 Mount & Pre-filled Data Verification
- Navigate to `http://localhost:3000/invoice-maker.php`.
- Assert HTTP response status is 200.
- Assert `#app` (or Vue root container) exists and Vue 3 reactive app has mounted.
- Assert Company section defaults to Automatixes details (Company Name, Email: `bobrober2323@gmail.com`, Phone: `+92 336 6920141`, Location: `New Jersey, NJ`).
- Assert initial line item row exists with default values.

#### Suite 2: Dynamic Line Item CRUD & Live Calculation Reactivity
- **Add Row**: Click "Add Item" button -> Assert line item count increases from 1 to 2.
- **Edit Row**: Change description dropdown/input, set Quantity = 2, Unit Price = $500 -> Assert row total updates to $1000.
- **Update Tax & Discount**: Input Tax % = 10, Discount % = 5 -> Assert Subtotal, Tax Amount, Discount Amount, and Grand Total calculate correctly:
  - Subtotal: $1000
  - Tax (10%): $100
  - Discount (5%): $50
  - Grand Total: $1050
- **Delete Row**: Click "Remove" button on row -> Assert row is removed from DOM and totals recalculate immediately.

#### Suite 3: Print / PDF Generation Trigger & Print Media Query
- **Print Trigger**: Click "Print / Download PDF" button -> Intercept or verify `window.print()` trigger.
- **Print Stylesheet Verification**: Evaluate DOM styles under `@media print` emulation (`page.emulateMedia({ media: 'print' })`):
  - Assert `#header-sticky` (navbar) has `display: none` (or hidden).
  - Assert `footer.footer-area` has `display: none`.
  - Assert input action buttons (e.g. "Add Item", "Remove", "Print") are hidden (`display: none`).
  - Assert clean invoice paper container remains visible.

#### Suite 4: Header & Footer Site Integration
- Verify `header.php` dropdown menu (`#servicesDropdown`) contains a link to `invoice-maker.php` / `invoice-maker`.
- Verify `footer.php` "Our Services" list contains a link to `invoice-maker.php` / `invoice-maker`.

---

## 4. Summary & Recommendations
1. **Server execution**: Always run `node dev-server.js` before executing Playwright tests.
2. **`dev-server.js` enhancement**: Recommend updating `includeRegex` in `dev-server.js` so that `header.php` renders cleanly across all pages.
3. **Automated verification**: Implement `tests/test-invoice-maker.js` matching the established pattern in `tests/test-chat-toggle.js`.
