<?php
declare(strict_types=1);

namespace App\Core;

final class View
{
    /**
     * Render the document head and the page header (preloader, navigation,
     * off-canvas cart/menu and the optional inner-page banner).
     *
     * Available $data keys:
     *   - title      (string) page <title>
     *   - header     (string|false) header layout variant: "acc", "default",
     *                "index-two" or "index-three". Pass false to skip it.
     *   - active     (string) navigation item to highlight
     *   - extraHead  (string) page-specific <style>/<link> HTML
     *   - banner     (array|null) ['title','class','crumbs' => [['text','href','class']]]
     */
    public function open(array $data = []): void
    {
        $this->render('layouts/head', [
            'title' => $data['title'] ?? 'Asian Track Championships | Tagaytay 2026',
            'extraHead' => $data['extraHead'] ?? '',
        ]);

        $header = $data['header'] ?? false;
        if ($header !== false) {
            $this->render('layouts/header-' . $header, [
                'active' => $data['active'] ?? '',
                'banner' => $data['banner'] ?? null,
            ]);
        }
    }

    /**
     * Render the page footer (scroll-to-top button, shared scripts,
     * page-specific scripts) and close the document.
     *
     * Available $data keys:
     *   - extraFooter (string) page-specific <script> HTML
     */
    public function close(array $data = []): void
    {
        $this->render('layouts/footer', [
            'extraFooter' => $data['extraFooter'] ?? '',
            'scrollTop' => $data['scrollTop'] ?? true,
        ]);
    }

    /**
     * Render a view template, making both $this (the View instance) and the
     * given $data available to it.
     */
    public function render(string $template, array $data = []): void
    {
        $file = VIEWS_PATH . '/' . $template . '.php';

        if (!is_file($file)) {
            throw new NotFoundException("View not found: '{$template}'.");
        }

        $view = $this;
        extract($data, EXTR_SKIP);
        require $file;
    }
}
