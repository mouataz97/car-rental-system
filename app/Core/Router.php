<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class Router
{
    public function handle()
    {
        $uri = $_GET['url'] ?? '';

        $uri = trim($uri, '/');

        if ($uri === '') {
            $controllerName = "Home";
        } else {
            $controllerName = ucfirst($uri);
        }

        $controllerClass = "Elmouatazbillah\\CarRentalSystem\\Controllers\\" 
                            . $controllerName . "Controller";

        if (!class_exists($controllerClass)) {
            echo "Controller NOT Found ❌";
            return;
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, "index")) {
            echo "Method index() missing ❌";
            return;
        }

        $controller->index();
    }
}