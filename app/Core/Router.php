<?php
declare(strict_types=1);

namespace App\Core;

final class Router
{
    /**
     * Turn a request URI into a route slug.
     *
     * Accepts pretty URLs ("/about"), PHP URLs ("/about.php") and the
     * original static HTML URLs ("/about.html", "/user information.html")
     * so existing links keep working without modification.
     */
    public static function resolve(string $requestUri): string
    {
        $path = (string) parse_url($requestUri, PHP_URL_PATH);
        $path = urldecode($path);
        $path = rtrim($path, '/');

        if ($path === '') {
            return 'home';
        }

        $slug = basename($path);
        $slug = preg_replace('/\.(html?|php\d*)$/i', '', $slug);
        $slug = strtolower(trim((string) preg_replace('/[\s_]+/', '-', $slug)));

        if ($slug === '' || $slug === 'index') {
            return 'home';
        }

        return $slug;
    }
}
