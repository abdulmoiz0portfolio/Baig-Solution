# Detailed Feature & Technical Specifications: Baig Solution Invoice Maker (`/invoice-maker.php`)

## Features Discovered

| # | Category | Feature | Description | Inputs | Outputs | Error Behavior | Discovered Via |
|---|----------|---------|-------------|--------|---------|----------------|----------------|
| 1 | UI & Setup | Vue 3 CDN & App Mount | Mount Vue 3 app instance on `#app` element using global Vue 3 CDN script tag (`vue.global.js`). | HTML `#app` container, script inclusion | Reactive Vue application instance bound to DOM | If CDN fails, page degrades gracefully with clear static fallback/message. | Dispatch & ORIGINAL_REQUEST R2 |
| 2 | UI & Design | Site Header & Footer Integration | Include `header.php` (with `$page_key = 'invoice-maker'`) and `footer.php` to maintain design consistency and navigation. | PHP `include 'header.php';`, `include 'footer.php';` | Site top navigation navbar, preloader, mouse cursor, footer widgets, scripts | Standard PHP include error handling if missing files. | Dispatch & ORIGINAL_REQUEST R1 |
| 3 | UI & Navigation | Header Dropdown Link | Add "Invoice Maker" link under the "Services" navigation dropdown menu in `header.php`. | Mouse hover/click on Services dropdown | Navigation to `/invoice-maker` | Standard 404 if file does not exist. | Dispatch & ORIGINAL_REQUEST R1 |
| 4 | UI & Navigation | Footer Link | Add "Invoice Maker" under "Our Services" list in `footer.php`. | Footer navigation link click | Navigation to `/invoice-maker` | Standard link navigation error. | Dispatch & ORIGINAL_REQUEST R1 |
| 5 | SEO & Metadata | SEO Meta Config Entry | Register `$meta_config['invoice-maker']` in `header.php` with title, meta description, keywords, and canonical URL. | `$page_key = 'invoice-maker'` variable | Dynamic HTML `<title>`, `<meta name="description">`, `<meta name="keywords">`, `<link rel="canonical">` | Fallback to `$meta_config['index']` if key missing. | Dispatch & ORIGINAL_REQUEST R1 |
| 6 | Data Management | Pre-filled Company Info | Provide default reactive company state pre-loaded with Baig Solution business details, editable by user. | Input fields for company name, tagline, email, phone, address, website | Rendered company header on screen and print invoice | Sanitized input text; defaults restored if cleared. | Dispatch & ORIGINAL_REQUEST R2/R4 |
| 7 | Data Management | Client Information Section | Provide input fields for client contact and company details. | Client name, company name, email, phone, billing address | Rendered "Bill To" section on screen and print invoice | Text input formatting handled via Vue binding. | Dispatch & ORIGINAL_REQUEST R2 |
| 8 | Data Management | Invoice Meta Information | Manage invoice details including invoice number, issue date, due date, currency selector, and notes. | Invoice #, Issue Date, Due Date, Currency dropdown, Notes text | Formatted invoice header and metadata badge | Dates default to today and today + 14 days if left empty. | Dispatch & ORIGINAL_REQUEST R2 |
| 9 | Line Items | Default 6 Core Services Dropdown | Quick-select dropdown in each row loaded with 6 Baig Solution core services + custom entry option. | Dropdown select action | Description field populated with selected service name | Selecting custom enables free text input. | Dispatch & ORIGINAL_REQUEST R3 |
| 10 | Line Items | Dynamic Row Management | Allow users to add new item rows (`addLineItem`) or delete existing rows (`removeLineItem`). | "Add Line Item" button click, "Delete" button click | Row added to table array or removed from table array | Deletion disabled when only 1 row remains to prevent empty invoices. | Dispatch & ORIGINAL_REQUEST R3 |
| 11 | Calculation | Subtotal Live Calculation | Compute total cost for each row (`qty * price`) and sum all rows reactively. | Quantity (numeric input), Unit Price (numeric input) | Live updating Subtotal display | Non-numeric or negative inputs clamped to 0 or valid float. | Dispatch & ORIGINAL_REQUEST R3 |
| 12 | Calculation | Tax & Discount Calculation | Apply percentage/fixed tax and discount rates to subtotal in real time. | Tax Rate %, Discount Rate % or Amount, Discount Type toggle | Tax amount, Discount amount live displays | Tax/Discount clamped to 0–100% or subtotal max. | Dispatch & ORIGINAL_REQUEST R3 |
| 13 | Calculation | Grand Total Live Calculation | Calculate final invoice total (`Subtotal + Tax - Discount`) reactively with currency formatting. | Subtotal, Tax Amount, Discount Amount, Currency Symbol | Formatted Grand Total (e.g., `$1,250.00`) | Grand total cannot drop below $0.00. | Dispatch & ORIGINAL_REQUEST R3 |
| 14 | Print & PDF | PDF / Print Export Action | Trigger browser print dialog via a styled "Print / Download PDF" button. | Button click event (`window.print()`) | Browser native print modal / PDF save dialog | Interrupted print dialog returns cleanly to edit mode. | Dispatch & ORIGINAL_REQUEST R4 |
| 15 | Print & PDF | Clean `@media print` Stylesheet | Pure CSS print media queries hiding web wrapper (navbar, footer, preloader, buttons, form borders) and styling A4 document. | `@media print` rules | Standard A4 clean black & white printable document layout | Print styling active only during print preview/printing. | Dispatch & ORIGINAL_REQUEST R4 |

---

## Edge Cases

| # | Feature | Input | Observed Behavior |
|---|---------|-------|-------------------|
| 1 | Line Item Table | User attempts to delete the last remaining row | Deletion is prevented or row is reset to blank default values; table always retains at least 1 item row. |
| 2 | Line Item Table | User enters negative quantity (e.g., `-5`) or price (e.g., `-$100`) | Vue reactive setters/methods force quantity to `1` or `0` and price to `0.00` to avoid calculation corruption. |
| 3 | Line Item Table | User enters non-numeric input into Qty or Unit Price fields | Input falls back to `0` or `1` during parse; calculation handles `NaN` safely returning `0.00`. |
| 4 | Line Item Table | User enters extremely long service description text | Table cell wraps text gracefully; print CSS ensures multi-line text does not clip or overflow column boundaries. |
| 5 | Tax & Discount | User inputs tax percentage > 100% or negative tax rate | Tax rate field limits input to range `[0, 100]`. |
| 6 | Tax & Discount | User inputs fixed discount exceeding Subtotal | Discount amount is capped at Subtotal, preventing negative Grand Total. |
| 7 | Currency Selection | User switches currency (e.g., from USD `$` to EUR `€` or PKR `Rs`) | All price displays, line item totals, subtotal, tax, discount, and grand total update instantly with the selected currency symbol. |
| 8 | Print Mode | Printing document with 10+ line items | `@media print` applies `page-break-inside: avoid` on table rows and summary block, preventing awkward page splits across pages. |
| 9 | Site Integration | Viewing `/invoice-maker` with dark theme enabled (`body.dark-theme`) | Edit view adapts to dark theme styling, but `@media print` explicitly forces background to `#ffffff` and text to `#1a1a1a` for clean PDF printing. |
| 10 | Browser Print | User triggers print while form fields are actively being edited | Active field blur is triggered,Vue state flushes, and print preview displays current text without focus outlines or caret cursor. |

---

## Detailed Technical Specifications

### 1. Architecture & Vue 3 Setup
- **File Location**: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\invoice-maker.php`
- **Dependencies**:
  - PHP 7.4+ compatibility (uses `header.php` and `footer.php` includes).
  - Vue 3 via CDN: `<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>` included before application mount script.
  - FontAwesome 6.4.2 & Bootstrap 5.3.2 (loaded via `header.php`).
- **Application Mounting**:
  - Container element: `<div id="app" class="invoice-app-container">`
  - Instantiated via `Vue.createApp({...}).mount('#app')`.

### 2. Data Model & Reactive State Specifications

The Vue 3 reactive data model (`reactive` or `ref` inside `setup()`) must follow this exact schema:

```javascript
{
  company: {
    name: 'Baig Solution',
    tagline: 'AI Agents, Automations & Web Development',
    email: 'bobrober2323@gmail.com',
    phone: '+92 336 6920141',
    address: 'New Jersey, NJ, United States',
    website: 'baigsolution.com',
    logoUrl: 'assets/img/logo/icon_light.jpg'
  },
  client: {
    name: '',
    companyName: '',
    email: '',
    phone: '',
    address: ''
  },
  invoiceMeta: {
    number: 'INV-2026-001', // Default auto-generated pattern
    date: '2026-08-06',    // Format YYYY-MM-DD
    dueDate: '2026-08-20', // Format YYYY-MM-DD (Date + 14 days)
    currency: '$',         // Selected currency symbol
    notes: 'Thank you for choosing Baig Solution. Payment is due within 14 days of invoice date.'
  },
  currencies: [
    { label: 'USD ($)', symbol: '$' },
    { label: 'EUR (€)', symbol: '€' },
    { label: 'GBP (£)', symbol: '£' },
    { label: 'CAD (C$)', symbol: 'C$' },
    { label: 'PKR (Rs)', symbol: 'Rs ' }
  ],
  defaultServices: [
    'Autonomous AI Agents',
    'AI Automations (n8n/Make)',
    'Web & App Development',
    'UI/UX Design',
    'Commercial Product Shoot',
    'Support & Maintenance'
  ],
  lineItems: [
    {
      selectedService: 'AI Automations (n8n/Make)',
      description: 'AI Automations (n8n/Make)',
      quantity: 1,
      unitPrice: 500.00
    }
  ],
  taxRate: 0,         // Tax percentage
  discountRate: 0,    // Discount value
  discountType: 'percent' // 'percent' or 'fixed'
}
```

### 3. Core Services & Line Item Management

1. **Default Services List**:
   - `Autonomous AI Agents`
   - `AI Automations (n8n/Make)`
   - `Web & App Development`
   - `UI/UX Design`
   - `Commercial Product Shoot`
   - `Support & Maintenance`

2. **Dropdown & Custom Logic**:
   - Each line item row has a dropdown with options:
     - The 6 default service items
     - `Custom Service...` option
   - When a default service is selected, `description` is auto-filled with that service name.
   - When `Custom Service...` is selected, `description` field is cleared for free-form custom typing.
   - Alternatively, user can directly edit the `description` field at any time.

3. **Row Manipulation Methods**:
   - `addLineItem()`: Pushes `{ selectedService: '', description: '', quantity: 1, unitPrice: 0.00 }` to `lineItems`.
   - `removeLineItem(index)`: Removes item at `index` if `lineItems.length > 1`.
   - `formatCurrency(val)`: Formats number to 2 decimal places with current currency symbol (e.g., `$1,250.00`).

### 4. Calculation Engine & Business Formulas

- **Row Line Total**:
  $$\text{Row Total}_i = \text{quantity}_i \times \text{unitPrice}_i$$

- **Subtotal**:
  $$\text{Subtotal} = \sum_{i=1}^{n} (\text{quantity}_i \times \text{unitPrice}_i)$$

- **Tax Amount**:
  $$\text{Tax Amount} = \text{Subtotal} \times \left(\frac{\text{taxRate}}{100}\right)$$

- **Discount Amount**:
  $$\text{Discount Amount} = \begin{cases} \text{Subtotal} \times \left(\frac{\text{discountRate}}{100}\right) & \text{if discountType = 'percent'} \\ \min(\text{discountRate}, \text{Subtotal}) & \text{if discountType = 'fixed'} \end{cases}$$

- **Grand Total**:
  $$\text{Grand Total} = \max(0, \text{Subtotal} + \text{Tax Amount} - \text{Discount Amount})$$

All calculated values must be wrapped in Vue `computed` properties so they update instantaneously in the DOM without requiring form submit actions or button triggers.

### 5. Pre-filled Baig Solution Company Details
- **Name**: Baig Solution
- **Tagline**: AI Agents, Automations & Web Development
- **Email**: bobrober2323@gmail.com
- **Phone**: +92 336 6920141
- **Address**: New Jersey, NJ, United States
- **Website**: baigsolution.com
- **Logo Asset**: `assets/img/logo/icon_light.jpg`

### 6. Site Integration Specifications

#### A. Header Metadata (`header.php`)
Add entry to `$meta_config` array:
```php
'invoice-maker' => [
    'title' => 'Free Online Invoice Generator | Baig Solution',
    'desc' => 'Create and download professional PDF invoices online. Pre-loaded with Baig Solution AI & web development services, real-time total calculation, and instant print export.',
    'keywords' => 'Invoice Generator, Free Invoice Maker, Baig Solution Invoice, AI Services Quote, Printable Invoice PDF',
    'url' => 'invoice-maker'
]
```

#### B. Header Navigation Dropdown (`header.php`)
Insert into the Services dropdown (`#servicesDropdown`):
```html
<li><a class="dropdown-item py-2 fw-semibold text-secondary" href="invoice-maker">Invoice Maker</a></li>
```

#### C. Footer Navigation Menu (`footer.php`)
Insert into "Our Services" list:
```html
<li><a href="invoice-maker">Invoice Maker / Generator</a></li>
```

### 7. `@media print` PDF Export Specifications

The `@media print` block should be included in a `<style>` block in `invoice-maker.php` or `assets/css/main.css`.

#### Key Print Rules:
1. **Hide Interactive & Web Elements**:
   ```css
   @media print {
       #header-sticky,
       footer.footer-area,
       #preloader,
       .mouse-cursor,
       #newsletterModal,
       .chat-layout,
       #sticky-expert-btn,
       .no-print,
       .btn,
       .btn-add-item,
       .btn-remove-item,
       .btn-print {
           display: none !important;
       }
   }
   ```

2. **Page & Layout Formatting**:
   ```css
   @media print {
       @page {
           size: A4 portrait;
           margin: 12mm 15mm;
       }
       body {
           background: #ffffff !important;
           color: #1a1a1a !important;
           font-family: 'Plus Jakarta Sans', sans-serif !important;
           font-size: 12pt;
       }
       .invoice-paper {
           box-shadow: none !important;
           border: none !important;
           padding: 0 !important;
           margin: 0 !important;
           width: 100% !important;
       }
   }
   ```

3. **Input Field Print Clean-Up**:
   Transform text inputs and select controls into clean document text:
   ```css
   @media print {
       input, select, textarea {
           border: none !important;
           background: transparent !important;
           box-shadow: none !important;
           padding: 0 !important;
           color: #000000 !important;
           appearance: none !important;
           -webkit-appearance: none !important;
       }
       select {
           background-image: none !important;
       }
   }
   ```

4. **Table & Break Prevention**:
   ```css
   @media print {
       .table {
           border-collapse: collapse !important;
           width: 100% !important;
       }
       .table th {
           background-color: #f8f9fa !important;
           color: #1a1a1a !important;
           border-bottom: 2px solid #dee2e6 !important;
       }
       .table td, .table th {
           padding: 8px 12px !important;
           border-bottom: 1px solid #e9ecef !important;
       }
       tr, .invoice-summary-block {
           page-break-inside: avoid !important;
           break-inside: avoid !important;
       }
   }
   ```

---

## Verification Plan

1. **Vue 3 Load Verification**:
   - Access `http://localhost:3000/invoice-maker` in browser/agent-browser.
   - Verify `#app` mounts successfully without console JavaScript errors.

2. **Reactivity & Calculation Verification**:
   - Add new row -> verify table row count increases.
   - Modify quantity and price -> verify line total, subtotal, tax amount, and grand total recalculate instantaneously.
   - Delete row -> verify row is removed and subtotal updates.

3. **Navigation & Integration Verification**:
   - Open home page `http://localhost:3000/` -> verify "Invoice Maker" appears in Header "Services" dropdown and Footer "Our Services" menu.
   - Check title and meta tags in page source for `/invoice-maker`.

4. **Print Layout Verification**:
   - Click "Print / Download PDF" button -> verify `window.print()` triggers.
   - Verify print preview hides navbar, footer, buttons, and input borders.
