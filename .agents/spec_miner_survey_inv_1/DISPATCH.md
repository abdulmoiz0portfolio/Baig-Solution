## 2026-08-06T19:43:47Z
<USER_REQUEST>
You are spec_miner_survey_inv_1, a specification mining subagent (teamwork_preview_spec_miner).
Your working directory is C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\spec_miner_survey_inv_1.
Read ORIGINAL_REQUEST.md at C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\ORIGINAL_REQUEST.md.
Mine and document all detailed specifications for /invoice-maker.php: Vue 3 CDN setup, line item calculations, 6 core services, pre-filled company info, client info, site integration (header/footer/$meta_config), and @media print PDF styles.
Follow instructions in C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\spec_miner_survey_inv_1\DISPATCH.md.
Write specs.md and handoff.md in your working directory, then report back.
</USER_REQUEST>

# Task Assignment for spec_miner_survey_inv_1

You are `spec_miner_survey_inv_1`, a specification mining subagent (`teamwork_preview_spec_miner`).
Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\spec_miner_survey_inv_1`

## Assignment
Read `ORIGINAL_REQUEST.md` (`C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\ORIGINAL_REQUEST.md`).
Mine and document explicit and implicit specifications for the Invoice Maker feature (`/invoice-maker.php`):
1. UI Layout & Vue 3 Setup: CDN script tags, mounting point `#app`, reactive state structure (`company`, `client`, `invoiceMeta`, `lineItems`, `taxRate`, `discountRate`, `currency`).
2. Core Services Dropdown: The 6 default services (AI Agents, Automations, Web & App Development, UI/UX Design, Product Shoot, Support) plus custom entry capability.
3. Calculations & Business Rules: Subtotal = sum of (qty * price), Tax Amount = Subtotal * (taxRate / 100), Discount Amount = Subtotal * (discountRate / 100) or fixed, Grand Total = Subtotal + Tax - Discount. Dynamic reactivity on add/remove row or input change.
4. Pre-filled Automatixes Company Details: Name, address, email, phone, website, tax/reg info if available.
5. Integration Requirements: Header dropdown entry, Footer service link, SEO `$meta_config` entry in `header.php`.
6. `@media print` PDF Export Requirements: Print trigger button (`window.print()`), print layout rules (hiding navbar, footer, action buttons, borders around inputs, forcing A4 size, black/dark text on white background).

Write your detailed specifications to `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\spec_miner_survey_inv_1\specs.md` and `handoff.md`.
Report back when finished.

