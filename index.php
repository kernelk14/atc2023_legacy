<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

use App\Controllers\PageController;
use App\Core\NotFoundException;

try {
    $route = \App\Core\Router::resolve($_SERVER['REQUEST_URI'] ?? '/');
    (new PageController())->show($route);
} catch (NotFoundException $e) {
    http_response_code(404);
    (new PageController())->error();
}
