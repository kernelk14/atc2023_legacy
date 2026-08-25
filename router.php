<?php
declare(strict_types=1);

// Built-in PHP dev server router: php -S localhost:8000 router.php
// Serves real asset files directly (including legacy/*.html) and routes
// everything else (including root-level *.html requests) through the
// front controller.

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri !== '/' && is_file(__DIR__ . $uri) && !preg_match('/^\/[^\/]+\.html?$/i', $uri)) {
    return false;
}

require __DIR__ . '/index.php';
