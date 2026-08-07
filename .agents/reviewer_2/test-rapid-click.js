const { chromium } = require('playwright');

(async () => {
    let browser;
    try {
        console.log('Testing rapid double-click edge case...');
        browser = await chromium.launch({ headless: true });
        const page = await browser.newPage();
        await page.goto('http://localhost:3000/', { waitUntil: 'domcontentloaded' });
        await page.waitForSelector('.chat-window-wrapper, .chat-wrapper', { state: 'attached' });

        // Click sticky button twice in rapid succession (within 20ms)
        console.log('Dispatching 2 rapid clicks to #sticky-expert-btn...');
        await page.evaluate(() => {
            const btn = document.getElementById('sticky-expert-btn');
            btn.click();
            setTimeout(() => btn.click(), 20);
        });

        // Wait 500ms for timeouts to finish
        await page.waitForTimeout(500);

        // Inspect toggleContainer style
        const toggleStyle = await page.evaluate(() => {
            const container = document.querySelector('.chat-window-toggle') ||
                              document.querySelector('.chat-toggle') ||
                              (document.querySelector('.chat-window-wrapper') ? Array.from(document.querySelector('.chat-window-wrapper').children).find(el => !el.classList.contains('chat-window') && !el.classList.contains('chat-layout')) : null);
            return container ? container.getAttribute('style') : null;
        });

        console.log('Toggle container inline style after rapid double-click:', toggleStyle);

        await browser.close();
    } catch (err) {
        console.error('Error during test:', err);
        if (browser) await browser.close();
    }
})();
