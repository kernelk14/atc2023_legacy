<?php
declare(strict_types=1);

define('APP_PATH', __DIR__);
define('BASE_PATH', dirname(__DIR__));
define('VIEWS_PATH', APP_PATH . '/Views');

spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';
    if (!str_starts_with($class, $prefix)) {
        return;
    }

    $relative = str_replace('\\', '/', substr($class, strlen($prefix)));
    $file = APP_PATH . '/' . $relative . '.php';

    if (is_file($file)) {
        require $file;
    }
});
