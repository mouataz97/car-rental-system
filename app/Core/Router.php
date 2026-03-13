<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class Router
{
    private $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function handle()
    {
        $uri = $_GET['url'] ?? '';
        $method = $_SERVER['REQUEST_METHOD'];

        if (!isset($this->routes[$method][$uri])) {
            echo "Route not found ❌";
            return;
        }

        $action = $this->routes[$method][$uri];

        list($controller, $method) = explode('@', $action);

        $controllerClass = "Elmouatazbillah\\CarRentalSystem\\Controllers\\" . $controller;

        $controllerObject = new $controllerClass();

        $controllerObject->$method();
    }
}