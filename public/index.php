<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Elmouatazbillah\CarRentalSystem\Core\Router;

$router = new Router();
$router->handle();