<?php

namespace Elmouatazbillah\CarRentalSystem\Controllers;

use Elmouatazbillah\CarRentalSystem\Models\Car;
use Elmouatazbillah\CarRentalSystem\Core\View;

class CarsController
{
    public function index()
    {
        $cars = Car::all();
        View::render('cars/index', ['cars' => $cars]);
    }

    public function create()
    {
        View::render('cars/create');
    }

    public function store()
    {
        Car::create($_POST);

        header("Location: /car-rental-system/public/cars");
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'];
        $car = Car::find($id);

        View::render('cars/edit', ['car' => $car]);
    }

    public function update()
    {
        $id = $_POST['id'];

        Car::update($id, $_POST);

        header("Location: /car-rental-system/public/cars");
        exit;
    }

    public function delete()
    {
        $id = $_GET['id'];

        Car::delete($id);

        header("Location: /car-rental-system/public/cars");
        exit;
    }
}