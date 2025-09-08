<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Bypass routing for existing files (like sitemap.xml)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestedFile = __DIR__ . '/../' . ltrim($uri, '/');
if (file_exists($requestedFile) && is_file($requestedFile)) {
    header('Content-Type: application/xml');
    readfile($requestedFile);
    exit;
}

require_once __DIR__ . '/routes/route.php';
$metaConfig = require __DIR__ . '/public/data/meta.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = '/';
$page = trim(str_replace($basePath, '', $uri), '/');
$page = $page ?: 'home';

if (strpos($uri, '/api/') === 0) {
    switch ($uri) {
        case '/api/submit-contact':
            require __DIR__ . '/server/controllers/MailerController.php';
            exit; // Important: stop execution so HTML layout won’t load
        default:
            header('Content-Type: application/json');
            echo json_encode(["success" => false, "message" => "API route not found"]);
            exit;
    }
}

// Load meta (fallback to default if page not found in config)
$meta = $metaConfig[$page] ?? $metaConfig['default'];
$viewFile = route($page);

// Make $meta available in views
include __DIR__ . '/views/partials/header.php';

if (file_exists($viewFile)) {
    include $viewFile;
} else {
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}

include __DIR__ . '/views/partials/footer.php';
