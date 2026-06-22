<?php
/**
 * Local Router for PHP Built-in Web Server
 * Mimics Vercel routing rules for clean URL compatibility.
 */

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

// Serve static files directly if they exist in the root directory
if (file_exists(__DIR__ . $requestPath) && !is_dir(__DIR__ . $requestPath)) {
    return false;
}

// Route everything else through index.php
require __DIR__ . '/index.php';
