const express = require('express');
const fs = require('fs');
const path = require('path');
const cors = require('cors');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Serve static assets
app.use('/assets', express.static(path.join(__dirname, 'assets')));

// Recursive function to emulate PHP includes
function processPhpIncludes(filePath) {
    if (!fs.existsSync(filePath)) {
        return `<!-- File not found: ${filePath} -->`;
    }
    
    let content = fs.readFileSync(filePath, 'utf8');
    
    // Regular expression to match <?php include 'file.php'; ?> or <?php include("file.php"); ?>
    const includeRegex = /<\?php\s+(?:include|require|include_once|require_once)\s+['"]([^'"]+)['"]\s*;\s*\?>/g;
    
    content = content.replace(includeRegex, (match, includeFileName) => {
        const includePath = path.join(path.dirname(filePath), includeFileName);
        return processPhpIncludes(includePath);
    });
    
    return content;
}

// Serve PHP files as HTML
app.get('*', (req, res, next) => {
    let reqPath = req.path;
    
    // Default route
    if (reqPath === '/') {
        reqPath = '/index.php';
    }
    
    // If requesting a path without extension, try appending .php
    if (!path.extname(reqPath)) {
        reqPath += '.php';
    }
    
    const filePath = path.join(__dirname, reqPath);
    
    if (fs.existsSync(filePath) && filePath.endsWith('.php')) {
        try {
            let htmlContent = processPhpIncludes(filePath);
            // Strip any remaining PHP blocks (even if closing tag is missing) to prevent raw code rendering in browser
            htmlContent = htmlContent.replace(/<\?php[\s\S]*?(?:\?>|$)/g, '');
            res.setHeader('Content-Type', 'text/html');
            res.send(htmlContent);
        } catch (err) {
            res.status(500).send(`Error processing PHP includes: ${err.message}`);
        }
    } else {
        next();
    }
});

// Start Server
app.listen(PORT, () => {
    console.log(`Baig Solution PHP Emulator Server running at http://localhost:${PORT}`);
});
