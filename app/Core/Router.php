<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

$controllerNamespace = "Elmouatazbillah\\CarRentalSystem\\Controllers\\";

$controllerClass = $controllerNamespace . $controllerName . "Controller";

class Router
{
    public function handle()
    {
        $uri = $_GET['url'] ?? '';

        $uri = trim($uri, '/');

        $parts = explode('/', $uri);

        $controllerName = !empty($parts[0]) ? ucfirst($parts[0]) : 'Home';

        $method = $parts[1] ?? 'index';

        $controllerClass =
            "Elmouatazbillah\\CarRentalSystem\\Controllers\\"
            . $controllerName
            . "Controller";

        if (!class_exists($controllerClass)) {
            http_response_code(404);
            echo "404 Page Not Found";
            return;
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, $method)) {
            echo "Method not found ❌";
            return;
        }

        $controller->$method();
    }
}