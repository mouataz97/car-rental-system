<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);

        $viewPath = __DIR__ . "/../Views/" . $view . ".php";

        $layoutPath = __DIR__ . "/../Views/layouts/main.php";

        if (!file_exists($viewPath)) {
            echo "View not found ❌";
            return;
        }

        require $layoutPath;
    }
}