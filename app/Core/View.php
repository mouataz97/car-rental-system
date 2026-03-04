<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);

        $viewPath = __DIR__ . "/../Views/" . $view . ".php";

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "View not found ❌";
        }
    }
}