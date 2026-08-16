<?php
/**
 * Automatixes Vercel Serverless PHP Router
 * Routes incoming URLs to corresponding PHP files in the root folder.
 */

$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Strip leading/trailing slashes
$path = trim($path, '/');

// Default page is index
if (empty($path)) {
    $path = 'index';
}

// Allowed dynamic PHP pages in root directory
$allowed_pages = [
    'index','portfolio','process','ai-image-generator','reviews',
    'about',
    'contact',
    'admin',
    'website-development',
    'ai-agents',
    'ai-automations',
    'product-shoot',
    'service',
    'Reviews',
    'privacy',
    'terms',
    'invoice-maker',
    'blogs',
    'blog-detail',
    'voice-agent'
];

if (in_array($path, $allowed_pages)) {
    $targetFile = __DIR__ . '/../' . $path . '.php';
    if (file_exists($targetFile)) {
        include $targetFile;
    } else {
        http_response_code(404);
        echo "404 - Page not found in root.";
    }
} else {
    http_response_code(404);
    echo "404 - Page not allowed.";
}
?>

