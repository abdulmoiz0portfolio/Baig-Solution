# Task Assignment for worker_inv_1

You are `worker_inv_1`, an implementation worker subagent (`teamwork_preview_worker`).
Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\worker_inv_1`

## References & Scope
- `ORIGINAL_REQUEST.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\ORIGINAL_REQUEST.md`
- `PROJECT.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\PROJECT.md`
- Survey Handoffs:
  - `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\explorer_survey_inv_1\handoff.md`
  - `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\spec_miner_survey_inv_1\handoff.md`
  - `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\explorer_survey_inv_2\handoff.md`

## Assignment & Requirements

### Part 1: Build `/invoice-maker.php` (Milestone M1)
1. Use PHP includes for `header.php` and `footer.php`. Note: Set `<?php $page_key = 'invoice-maker'; ?> <?php include 'header.php'; ?>` with separate PHP tags so `dev-server.js` regex matches properly.
2. Load Vue 3 via CDN (`https://unpkg.com/vue@3/dist/vue.global.js`).
3. Build a clean, responsive UI matching Baig Solution's design system (`Plus Jakarta Sans`/`Outfit`, `#1a1a1a`, `#e77f23`, `#ffffff`, `#fff5eb`, `.btn-brand`, Bootstrap 5 cards/tables/inputs).
4. Pre-fill Company Details:
   - Name: `Baig Solution`
   - Address: `New Jersey, NJ, United States`
   - Phone: `+92 336 6920141`
   - Email: `bobrober2323@gmail.com`
   - Website: `https://baigsolution.com`
   - Tagline: `Empowering Businesses with AI & Automation`
5. Editable Client Details: Client Name, Company Name, Address, Email, Phone.
6. Invoice Metadata: Invoice # (e.g. `INV-1001`), Date, Due Date, Currency Selector (`$`, `€`, `£`, `C$`, `Rs`).
7. Dynamic Line Items Table:
   - Select dropdown for core services pre-filled with the 6 services (`Autonomous AI Agents`, `AI Automations (n8n/Make)`, `Web & App Development`, `UI/UX Design`, `Commercial Product Shoot`, `Support & Maintenance`) plus an option for "Custom Service...".
   - If "Custom Service..." or text typed, allow entering custom service name/description.
   - Inputs for Quantity (number) and Unit Price (number).
   - Dynamic row addition ("+ Add Line Item" button) and row deletion ("Remove" button, protecting min 1 row).
8. Real-time Calculations (Vue computed properties):
   - Row Total = Quantity * Unit Price
   - Subtotal = Sum of Row Totals
   - Tax Rate (%) input & calculated Tax Amount
   - Discount Rate (%) or Amount input & calculated Discount Amount
   - Grand Total = Subtotal + Tax Amount - Discount Amount
9. Print / PDF Export & `@media print` CSS:
   - "Print / Download PDF" button calling `window.print()`.
   - Embed `@media print` stylesheet hiding header navbar (`header`), footer (`footer`), n8n chat widget (`.chat-layout`, `#sticky-expert-btn`), preloader (`#preloader`), action buttons (`.btn`, `.no-print`), and input borders/shadows so only a crisp, black & white / light theme A4 invoice document is printed.

### Part 2: Site Integration (Milestone M2)
1. `header.php`:
   - Add `$meta_config['invoice-maker']` entry with title (`Free Online Invoice Maker | Baig Solution`), description, and keywords.
   - Add `<a class="dropdown-item" href="invoice-maker">Free Invoice Maker</a>` inside `#servicesDropdown` menu.
2. `footer.php`:
   - Add `<li><a href="invoice-maker">Free Invoice Maker</a></li>` under "Our Services" list.
3. `dev-server.js`:
   - Inspect and update `includeRegex` if needed to ensure `header.php` and `footer.php` are properly parsed when included.

### Part 3: Automated Verification (Milestone M3)
1. Write Playwright test script in `tests/test-invoice-maker.js`.
2. Start or ensure `dev-server.js` is running on `http://localhost:3000`.
3. Execute `node tests/test-invoice-maker.js` verifying:
   - `/invoice-maker` loads with status 200 and mounts Vue 3 instance.
   - Pre-filled company info is displayed.
   - Line items can be added, updated, and removed dynamically.
   - Calculations (Subtotal, Tax, Discount, Grand Total) update accurately in real time.
   - Header dropdown and footer links contain `/invoice-maker.php` or `invoice-maker`.
   - `@media print` CSS hides header, footer, buttons, and input borders.

## Mandatory Integrity Constraint
DO NOT CHEAT. All implementations must be genuine. DO NOT hardcode test results, create dummy/facade implementations, or circumvent the intended task. A teamwork_preview_auditor will independently verify your work. Integrity violations WILL be detected and your work WILL be rejected.

Write your code changes, run test verification, and output a detailed handoff report in `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\worker_inv_1\handoff.md`.
