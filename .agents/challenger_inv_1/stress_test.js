const { chromium } = require('playwright');
const http = require('http');

(async () => {
    let browser;
    try {
        console.log('=== STARTING ADVERSARIAL STRESS TEST FOR INVOICE MAKER ===\n');

        // Check if dev-server is reachable
        const checkServer = () => new Promise((resolve) => {
            const req = http.get('http://localhost:3000/invoice-maker', (res) => {
                resolve(res.statusCode === 200);
            });
            req.on('error', () => resolve(false));
            req.end();
        });

        const isRunning = await checkServer();
        if (!isRunning) {
            console.log('❌ Dev server not detected on http://localhost:3000.');
            process.exit(1);
        }

        console.log('Launching headless browser...');
        browser = await chromium.launch({ headless: true });
        const context = await browser.newContext();
        const page = await context.newPage();

        // Listen for errors
        page.on('console', msg => {
            const txt = msg.text();
            if (txt.includes('Error') || txt.includes('error') || txt.includes('Exception')) {
                console.log('PAGE LOG ERROR:', txt);
            }
        });
        page.on('pageerror', err => console.log('PAGE EXCEPTION:', err.stack));

        console.log('Navigating to http://localhost:3000/invoice-maker ...');
        const response = await page.goto('http://localhost:3000/invoice-maker', { waitUntil: 'domcontentloaded', timeout: 30000 });
        if (response.status() !== 200) {
            throw new Error(`Failed to load page. HTTP status: ${response.status()}`);
        }
        await page.waitForSelector('#app', { state: 'visible' });

        // ----------------------------------------------------
        // TEST 1: Row Mutations & Minimum Protection
        // ----------------------------------------------------
        console.log('\n--- TEST 1: Dynamic Row Mutations & Minimum Protection ---');
        let rows = await page.$$('.line-item-row');
        console.log(`Initial rows: ${rows.length}`);
        if (rows.length !== 2) throw new Error(`Expected 2 initial rows, found ${rows.length}`);

        // Add 4 rows (Total 6)
        for (let i = 0; i < 4; i++) {
            await page.click('#add-line-item-btn');
            await page.waitForTimeout(100);
        }
        rows = await page.$$('.line-item-row');
        console.log(`After adding 4 items: ${rows.length} rows`);
        if (rows.length !== 6) throw new Error(`Expected 6 rows after additions, found ${rows.length}`);

        // Remove 5 rows one by one
        for (let i = 0; i < 5; i++) {
            const removeBtns = await page.$$('.remove-line-btn');
            await removeBtns[0].click();
            await page.waitForTimeout(100);
        }
        rows = await page.$$('.line-item-row');
        console.log(`After removing 5 items: ${rows.length} row(s) remaining`);
        if (rows.length !== 1) throw new Error(`Expected 1 row remaining, found ${rows.length}`);

        // Attempt to remove the final 1 row
        const lastRemoveBtn = await page.$('.remove-line-btn');
        const isDisabled = await lastRemoveBtn.getAttribute('disabled');
        console.log(`Last row remove button disabled attribute: ${isDisabled !== null}`);
        if (isDisabled === null) throw new Error('Remove button on single remaining row is not disabled!');

        await lastRemoveBtn.click({ force: true }).catch(() => {});
        await page.waitForTimeout(100);
        rows = await page.$$('.line-item-row');
        if (rows.length !== 1) throw new Error(`Row count dropped below 1! Actual: ${rows.length}`);
        console.log('✅ TEST 1 PASSED: Dynamic row additions, deletions, and minimum protection (1 row limit) verified.');

        // ----------------------------------------------------
        // TEST 2: Currency Selection Reactivity
        // ----------------------------------------------------
        console.log('\n--- TEST 2: Currency Selection Reactivity ---');
        const currencies = [
            { code: '€', text: 'EUR (€)' },
            { code: '£', text: 'GBP (£)' },
            { code: 'C$', text: 'CAD (C$)' },
            { code: 'Rs', text: 'PKR (Rs)' },
            { code: '$', text: 'USD ($)' }
        ];

        for (const curr of currencies) {
            await page.selectOption('#currency-select', curr.code);
            await page.waitForTimeout(100);
            const subtotalText = await page.$eval('#subtotal-val', el => el.innerText);
            const grandTotalText = await page.$eval('#grand-total-val', el => el.innerText);
            console.log(`Selected currency '${curr.code}': Subtotal="${subtotalText}", GrandTotal="${grandTotalText}"`);

            if (!subtotalText.startsWith(curr.code) || !grandTotalText.startsWith(curr.code)) {
                throw new Error(`Currency symbol ${curr.code} not reflected in subtotal/grandTotal displays.`);
            }
        }
        console.log('✅ TEST 2 PASSED: Currency selector reactively updates all displayed currency symbols.');

        // ----------------------------------------------------
        // TEST 3: Math & Precision Calculations Stress Test
        // ----------------------------------------------------
        console.log('\n--- TEST 3: Math & Precision Calculations Stress Test ---');

        // Reset & setup 2 line items for math test
        await page.click('#add-line-item-btn');
        await page.waitForTimeout(100);
        const qtyInputs = await page.$$('.qty-input');
        const priceInputs = await page.$$('.price-input');

        // Subcase 3.1: 0% Tax, 0% Discount
        console.log('Subcase 3.1: Qty 5 @ $19.99 + Qty 2 @ $50.00 with 0% Tax, 0% Discount');
        await qtyInputs[0].fill('5');
        await priceInputs[0].fill('19.99');
        await qtyInputs[1].fill('2');
        await priceInputs[1].fill('50.00');
        await page.fill('#tax-rate-input', '0');
        await page.fill('#discount-rate-input', '0');
        await page.waitForTimeout(200);

        let subtotal = await page.$eval('#subtotal-val', el => el.innerText);
        let tax = await page.$eval('#tax-amount-val', el => el.innerText);
        let discount = await page.$eval('#discount-amount-val', el => el.innerText);
        let grandTotal = await page.$eval('#grand-total-val', el => el.innerText);

        console.log(`Results 3.1 -> Subtotal: ${subtotal}, Tax: ${tax}, Discount: ${discount}, Grand Total: ${grandTotal}`);
        // 5 * 19.99 = 99.95; 2 * 50.00 = 100.00 -> Subtotal = 199.95
        if (!subtotal.includes('199.95')) throw new Error(`Subtotal mismatch in 3.1: expected 199.95, got ${subtotal}`);
        if (!grandTotal.includes('199.95')) throw new Error(`Grand total mismatch in 3.1: expected 199.95, got ${grandTotal}`);

        // Subcase 3.2: Fractional Math (15.5% Tax, 20% Discount)
        console.log('Subcase 3.2: Qty 2 @ $123.45 + Qty 3 @ $45.67 with 15.5% Tax, 20% Discount');
        // Row 1: 2 * 123.45 = 246.90
        // Row 2: 3 * 45.67 = 137.01
        // Subtotal = 383.91
        // Tax (15.5%) = 383.91 * 0.155 = 59.50605 -> 59.51
        // Discount (20%) = 383.91 * 0.20 = 76.782 -> 76.78
        // Grand Total = 383.91 + 59.50605 - 76.782 = 366.63405 -> 366.63
        await qtyInputs[0].fill('2');
        await priceInputs[0].fill('123.45');
        await qtyInputs[1].fill('3');
        await priceInputs[1].fill('45.67');
        await page.fill('#tax-rate-input', '15.5');
        await page.fill('#discount-rate-input', '20');
        await page.waitForTimeout(200);

        subtotal = await page.$eval('#subtotal-val', el => el.innerText);
        tax = await page.$eval('#tax-amount-val', el => el.innerText);
        discount = await page.$eval('#discount-amount-val', el => el.innerText);
        grandTotal = await page.$eval('#grand-total-val', el => el.innerText);

        console.log(`Results 3.2 -> Subtotal: ${subtotal}, Tax: ${tax}, Discount: ${discount}, Grand Total: ${grandTotal}`);
        if (!subtotal.includes('383.91')) throw new Error(`Subtotal mismatch in 3.2: expected 383.91, got ${subtotal}`);
        if (!tax.includes('59.51')) throw new Error(`Tax mismatch in 3.2: expected 59.51, got ${tax}`);
        if (!discount.includes('76.78')) throw new Error(`Discount mismatch in 3.2: expected 76.78, got ${discount}`);
        if (!grandTotal.includes('366.63')) throw new Error(`Grand total mismatch in 3.2: expected 366.63, got ${grandTotal}`);

        // Subcase 3.3: 100% Tax & 100% Discount Edge Cases
        console.log('Subcase 3.3: 100% Tax & 100% Discount Boundary Test');
        await qtyInputs[0].fill('1');
        await priceInputs[0].fill('500.00');
        await qtyInputs[1].fill('0');
        await priceInputs[1].fill('0');
        await page.fill('#tax-rate-input', '100');
        await page.fill('#discount-rate-input', '100');
        await page.waitForTimeout(200);

        subtotal = await page.$eval('#subtotal-val', el => el.innerText);
        tax = await page.$eval('#tax-amount-val', el => el.innerText);
        discount = await page.$eval('#discount-amount-val', el => el.innerText);
        grandTotal = await page.$eval('#grand-total-val', el => el.innerText);

        console.log(`Results 3.3 -> Subtotal: ${subtotal}, Tax: ${tax}, Discount: ${discount}, Grand Total: ${grandTotal}`);
        if (!tax.includes('500.00')) throw new Error(`100% tax failed: expected 500.00, got ${tax}`);
        if (!discount.includes('500.00')) throw new Error(`100% discount failed: expected 500.00, got ${discount}`);
        if (!grandTotal.includes('500.00')) throw new Error(`Grand total with 100% tax & 100% discount failed: expected 500.00, got ${grandTotal}`);

        // Subcase 3.4: Large Values & String Formatting
        console.log('Subcase 3.4: Large Numbers (Qty 10,000 @ $9,999.99)');
        await qtyInputs[0].fill('10000');
        await priceInputs[0].fill('9999.99');
        await page.fill('#tax-rate-input', '5');
        await page.fill('#discount-rate-input', '0');
        await page.waitForTimeout(200);

        subtotal = await page.$eval('#subtotal-val', el => el.innerText);
        grandTotal = await page.$eval('#grand-total-val', el => el.innerText);
        console.log(`Results 3.4 -> Subtotal: ${subtotal}, Grand Total: ${grandTotal}`);
        // 10000 * 9999.99 = 99,999,900.00
        if (!subtotal.includes('99,999,900.00')) throw new Error(`Large subtotal failed: expected 99,999,900.00, got ${subtotal}`);

        console.log('✅ TEST 3 PASSED: Math calculations, rounding, 0%/15.5%/100% rates, and large numbers verified without floating point errors.');

        // ----------------------------------------------------
        // TEST 4: Print Emulation & UI Cleanliness
        // ----------------------------------------------------
        console.log('\n--- TEST 4: Print Emulation (@media print) ---');
        await page.emulateMedia({ media: 'print' });
        await page.waitForTimeout(200);

        const hiddenElementsSelectors = [
            'header',
            '#header-sticky',
            'footer',
            '.footer-area',
            '#sticky-expert-btn',
            '.no-print',
            '.subpage-hero',
            '#print-invoice-btn',
            '#add-line-item-btn',
            '.n8n-chat',
            '.chat-layout',
            '.chat-wrapper'
        ];

        for (const selector of hiddenElementsSelectors) {
            const display = await page.evaluate((sel) => {
                const el = document.querySelector(sel);
                return el ? window.getComputedStyle(el).display : 'none';
            }, selector);
            console.log(`Print check for '${selector}': display = ${display}`);
            if (display !== 'none') {
                throw new Error(`Print media check failed: '${selector}' is visible (display: ${display}).`);
            }
        }

        // Check input field styles in print mode (borderless, transparent)
        const inputStyles = await page.evaluate(() => {
            const input = document.querySelector('.company-name-input');
            const style = window.getComputedStyle(input);
            return {
                borderStyle: style.borderStyle,
                borderWidth: style.borderWidth,
                backgroundColor: style.backgroundColor,
                boxShadow: style.boxShadow
            };
        });

        console.log(`Print input styles (.company-name-input): borderStyle="${inputStyles.borderStyle}", borderWidth="${inputStyles.borderWidth}", bg="${inputStyles.backgroundColor}", boxShadow="${inputStyles.boxShadow}"`);
        if (inputStyles.borderStyle !== 'none' && inputStyles.borderWidth !== '0px') {
            throw new Error(`Input fields still have borders in print mode: style="${inputStyles.borderStyle}", width="${inputStyles.borderWidth}"`);
        }

        console.log('✅ TEST 4 PASSED: Print emulation cleanly hides navigation, footer, chat widget, buttons, and removes input borders.');

        // ----------------------------------------------------
        // TEST 5: Form Reset Verification
        // ----------------------------------------------------
        console.log('\n--- TEST 5: Form Reset Verification ---');
        await page.emulateMedia({ media: 'screen' });
        await page.click('button:has-text("Reset")');
        await page.waitForTimeout(200);

        const resetClientName = await page.$eval('#client-name-input', el => el.value);
        const resetTaxRate = await page.$eval('#tax-rate-input', el => el.value);
        const resetDiscountRate = await page.$eval('#discount-rate-input', el => el.value);

        console.log(`After Reset -> Client Name="${resetClientName}", TaxRate=${resetTaxRate}, DiscountRate=${resetDiscountRate}`);
        if (resetClientName !== '' || Number(resetTaxRate) !== 0 || Number(resetDiscountRate) !== 0) {
            throw new Error('Reset button did not restore default empty/zero values properly.');
        }

        console.log('✅ TEST 5 PASSED: Reset button restores initial form state correctly.');

        console.log('\n==================================================');
        console.log('🎉 ALL ADVERSARIAL STRESS TESTS PASSED SUCCESSFULLY!');
        console.log('==================================================');

        await browser.close();
        process.exit(0);

    } catch (err) {
        console.error('\n❌ STRESS TEST FAILED:', err.message);
        if (browser) await browser.close();
        process.exit(1);
    }
})();
