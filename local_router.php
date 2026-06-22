<?php
/**
 * Local Router for PHP Built-in Web Server
 * Mimics Vercel routing rules for clean URL compatibility.
 */

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

// Resolve the requested path. If the literal file doesn't exist (e.g. the
// request is /doctors/dr-lata-goyal with no extension), try appending .php
// so that the per-doctor files in doctors/ are executed.
$candidate = __DIR__ . $requestPath;

if (!file_exists($candidate) || is_dir($candidate)) {
    if (substr($candidate, -4) !== '.php' && file_exists($candidate . '.php') && !is_dir($candidate . '.php')) {
        // Found a matching .php file — include it directly. We can't return
        // false here because PHP's built-in server would try to serve the
        // original (extensionless) path and 404.
        require $candidate . '.php';
        return;
    }
} else {
    // Literal file exists — return false to let PHP's built-in server
    // serve it (handles static assets like style.css, script.js, logo.png,
    // images/*).
    return false;
}

// Route everything else through index.php
require __DIR__ . '/index.php';
