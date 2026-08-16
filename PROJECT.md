# Project: Automatixes Invoice Maker

## Architecture
- `/invoice-maker.php`: Main Invoice Maker web page built with Vue 3 (via CDN), Bootstrap 5 styling, dynamic reactivity, and `@media print` CSS.
- `header.php`: Navigation header, `$meta_config` SEO tags, and Services dropdown links.
- `footer.php`: Footer section with "Our Services" list and global n8n chat widget.
- `assets/css/main.css`: Core design system stylesheet.
- `dev-server.js`: Node Express server providing local development environment with dynamic PHP include & `$page_key` meta title resolution at `http://localhost:3000`.
- `tests/test-invoice-maker.js`: Automated E2E verification test suite using Playwright.

## Feature Inventory
| # | Feature | Description | Milestone | Source |
|---|---------|-------------|-----------|--------|
| 1 | Vue 3 App & Layout | Page `/invoice-maker.php` with Vue 3 CDN, mounting point `#app`, and Bootstrap 5 responsive layout | M1 | ORIGINAL_REQUEST R1, R2 |
| 2 | Company & Client Sections | Pre-filled Automatixes company details (editable) and editable client info fields | M1 | ORIGINAL_REQUEST R2 |
| 3 | Dynamic Line Items | Line items table allowing add/remove rows, quantity, unit price, and core service dropdown + custom entry | M1 | ORIGINAL_REQUEST R3 |
| 4 | Live Math Calculations | Live calculated Subtotal, Tax %, Discount, and Grand Total with currency selector | M1 | ORIGINAL_REQUEST R3 |
| 5 | Print / PDF Export | "Print / Download PDF" button and `@media print` stylesheet for A4-ready PDF print output | M1 | ORIGINAL_REQUEST R4 |
| 6 | Header SEO & Navigation | SEO `$meta_config['invoice-maker']` and link in Header "Services" dropdown | M2 | ORIGINAL_REQUEST R1 |
| 7 | Footer Links Integration | Link to Invoice Maker in Footer "Our Services" list | M2 | ORIGINAL_REQUEST R1 |
| 8 | Server Include & Title Fix | Ensure `dev-server.js` properly parses PHP include tags and populates `<title>` from `$meta_config` | M2 | Explorer 2 & Reviewer 1 Finding |
| 9 | Automated E2E Verification | Automated test script `tests/test-invoice-maker.js` verifying Vue logic, math, print styles, and navigation | M3 | ORIGINAL_REQUEST R3 |

## Milestones
| # | Name | Scope | Dependencies | Status |
|---|------|-------|-------------|--------|
| M1 | Invoice Maker UI & Vue Logic | Implement `/invoice-maker.php` with Vue 3 reactivity, line items, totals math, pre-filled company info, client fields, and `@media print` CSS | none | DONE |
| M2 | Header/Footer Integration & Server Fix | Add SEO `$meta_config`, update header dropdown and footer list, fix `dev-server.js` include parsing & title resolution | M1 | DONE |
| M3 | Automated E2E Test Suite | Create and execute `tests/test-invoice-maker.js` verifying full functionality and print styling | M1, M2 | DONE |

## Interface Contracts
### `/invoice-maker.php` Vue Data Model & Methods
- `company`: `{ name: 'Automatixes', address: 'New Jersey, NJ, United States', phone: '+92 336 6920141', email: 'bobrober2323@gmail.com', website: 'https://baigsolution.com' }`
- `client`: `{ name: '', company: '', address: '', email: '', phone: '' }`
- `invoiceMeta`: `{ number: 'INV-1001', date: YYYY-MM-DD, dueDate: YYYY-MM-DD, currency: '$' }`
- `lineItems`: `[{ description: 'Autonomous AI Agents', quantity: 1, price: 500.00 }]`
- `taxRate`: percentage (e.g. 5)
- `discountRate`: percentage (e.g. 0)
- Computed properties: `subtotal`, `taxAmount`, `discountAmount`, `grandTotal`
- Methods: `addLineItem()`, `removeLineItem(index)`, `triggerPrint()`

### Header & Footer Links
- Header dropdown item: `<a class="dropdown-item" href="invoice-maker">Free Invoice Maker</a>`
- Footer services item: `<li><a href="invoice-maker">Free Invoice Maker</a></li>`
- `$meta_config['invoice-maker']`: `{ title: 'Free Online Invoice Maker | Automatixes', description: '...', keywords: '...' }`

## Code Layout
- `/invoice-maker.php`: New PHP/HTML/Vue file.
- `header.php`: Navigation and SEO config.
- `footer.php`: Footer navigation links.
- `dev-server.js`: Node Express local dev server.
- `tests/test-invoice-maker.js`: E2E test script.
