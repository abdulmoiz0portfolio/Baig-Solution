## 2026-08-06T14:54:57Z

# Task Assignment for worker_inv_2

You are `worker_inv_2`, an implementation worker subagent (`teamwork_preview_worker`).
Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\worker_inv_2`

## References
- `ORIGINAL_REQUEST.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\ORIGINAL_REQUEST.md`
- `PROJECT.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\PROJECT.md`
- Reviewer 1 Handoff: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\reviewer_inv_1\handoff.md`
- Challenger 2 Handoff: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\challenger_inv_2\handoff.md`

## Assignment & Requirements

### Fix 1: `dev-server.js` PHP Meta Title Handling
Update `dev-server.js` (`C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\dev-server.js`):
- Enhance the PHP processing logic so that when a page defines `$page_key` (e.g. `$page_key = 'invoice-maker';`), `dev-server.js` inspects `$meta_config` from `header.php` and replaces `<title><?php echo $meta['title']; ?></title>` with the actual title (`Free Online Invoice Maker | Automatixes`) or evaluates the `$page_key` lookup dynamically.
- Ensure that fetching `http://localhost:3000/invoice-maker` returns an HTML page with `<title>Free Online Invoice Maker | Automatixes</title>`.

### Fix 2: `invoice-maker.php` Custom Service Print Style
Update `invoice-maker.php` (`C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\invoice-maker.php`):
- Add `:class="{ 'no-print': item.serviceSelect === 'custom' }"` (or `d-print-none`) to the service `<select>` element so that when `"custom"` service is chosen, the `<select>` dropdown is hidden during `@media print` and only the custom text input prints.

### Fix 3: Test Infrastructure & Verification (`tests/test-invoice-maker.js`)
Update `tests/test-invoice-maker.js` (`C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\tests\test-invoice-maker.js`):
- Add `await page.addInitScript(() => { localStorage.setItem('newsletterSeen_baig', 'true'); });` before navigating to avoid newsletter modal pointer interception.
- Run `node tests/test-invoice-maker.js` with `dev-server.js` running on `http://localhost:3000`.
- Verify that **ALL 7 test steps pass 100%**, including Step 2 (`Page title verified from $meta_config`).

## Mandatory Integrity Constraint
DO NOT CHEAT. All implementations must be genuine. DO NOT hardcode test results, create dummy/facade implementations, or circumvent the intended task. A teamwork_preview_auditor will independently verify your work. Integrity violations WILL be detected and your work WILL be rejected.

Document implementation details, test execution outputs, and verification logs in `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\worker_inv_2\handoff.md`.
