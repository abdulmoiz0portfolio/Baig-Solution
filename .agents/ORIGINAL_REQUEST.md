# Original User Request

## Initial Request — 2026-08-06T01:26:26Z

Fix the n8n chat toggle logic on the Automatixes website so that the custom "Connect with an Expert" button reliably opens the chat, and the custom "X" button reliably closes it, overcoming Vue.js event suppression.

Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes`
Integrity mode: development

## Requirements

### R1. Fix Chat Open Action
The sticky orange "Connect with an Expert" button must successfully open the n8n chat widget when clicked. The logic currently fails because Vue.js suppresses the simulated clicks dispatched to the hidden native toggle bubble.

### R2. Fix Chat Close Action
The custom red "✖" close button in the chat header must successfully close the chat when clicked. Currently, it fails to close the chat and only reappears the sticky orange button.

### R3. Automated Verification
The agent must write a test script or use `agent-browser` commands to programmatically click the "Connect with an Expert" button, verify the chat opens, then click the "✖" button, and verify the chat closes.

## Acceptance Criteria

### Chat Toggle
- [ ] Clicking the orange "Connect with an Expert" button opens the `.chat-layout` window.
- [ ] Clicking the "✖" button inside the chat header removes the `.chat-layout` window and restores the orange sticky button.

### Verification
- [ ] An `agent-browser` command or test script successfully completes a full open-close cycle on the local deployment without errors.

## 2026-08-06T14:42:57Z

# Teamwork Project Prompt — Draft

> Status: Launched
> Goal: Craft prompt → get user approval → delegate to teamwork_preview

Build a professional "Invoice Maker" page for the Automatixes website (`/invoice-maker.php`) using Vue 3 (via CDN) for client-side logic and `@media print` for PDF generation, fully integrated into the existing site's design system.

Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes`
Integrity mode: development

## Requirements

### R1. UI and Integration
Build the UI using the site's existing Bootstrap 5 framework, typography (`Outfit` / `Plus Jakarta Sans`), and color palette (`#1a1a1a`, `#e77f23`, `#ffffff`). Integrate the existing `header.php` and `footer.php`. Add the page to the header's "Services" dropdown and footer's "Our Services" list. Add appropriate SEO meta tags to `$meta_config` in `header.php`.

### R2. Invoice Data & Reactivity
Use Vue 3 (via CDN) to manage the invoice state. Include a Company section pre-filled with Automatixes details (editable), a Client section, and Invoice Meta (Invoice #, Dates, Currency).

### R3. Line Items and Calculations
Implement a dynamic line items table where users can add/remove rows without reloading. The description dropdown must default to the 6 core services (AI Agents, Automations, Web & App Development, UI/UX Design, Product Shoot, Support) or allow custom entry. Live calculate Subtotal, Tax (%), Discount, and Grand Total.

### R4. Print/PDF Export
Implement a "Print / Download PDF" button that triggers `window.print()`. Use a robust `@media print` stylesheet to hide the navbar, footer, and form controls, forcing the layout into a clean, professional, black-and-white (or light theme) A4-ready invoice.

## Acceptance Criteria

### Functionality
- [ ] The page loads without errors and the Vue instance mounts successfully.
- [ ] Users can add and remove line items dynamically.
- [ ] Subtotal, tax, discount, and grand total calculate correctly and update live.
- [ ] The "Print" button successfully triggers the browser's print dialog.

### Integration & Styling
- [ ] The page matches the existing site's aesthetic (fonts, button styles, section headers).
- [ ] The navbar and footer are present and functional on the screen.
- [ ] In print preview, the navbar, footer, and all input controls (buttons, borders around text) are hidden, leaving only a clean invoice document.
- [ ] The new page is linked in the header dropdown and footer links.

