<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Elmouatazbillah\CarRentalSystem\Core\Router;

$router = new Router();

/* HOME */
$router->get('', 'HomeController@index');

/* CARS */
$router->get('cars', 'CarsController@index');
$router->get('cars/create', 'CarsController@create');
$router->post('cars/store', 'CarsController@store');
$router->get('cars/edit', 'CarsController@edit');
$router->post('cars/update', 'CarsController@update');
$router->get('cars/delete', 'CarsController@delete');

$router->handle();