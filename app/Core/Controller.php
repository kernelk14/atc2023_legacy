<?php
declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    protected function view(string $template, array $data = []): View
    {
        $view = new View();
        $view->render($template, $data);

        return $view;
    }
}
