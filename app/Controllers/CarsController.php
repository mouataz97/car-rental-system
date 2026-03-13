<?php

namespace Elmouatazbillah\CarRentalSystem\Controllers;

use Elmouatazbillah\CarRentalSystem\Models\Car;
use Elmouatazbillah\CarRentalSystem\Core\BaseController;

class CarsController extends BaseController
{
    public function index()
    {
        $cars = Car::all();

        $this->view('cars/index', [
            'cars' => $cars
        ]);
    }

    public function create()
    {
        $this->view('cars/create');
    }

    public function store()
    {
        Car::create($_POST);

        $this->redirect('/car-rental-system/public/cars');
    }

    public function edit()
    {
        $id = $_GET['id'];

        $car = Car::find($id);

        $this->view('cars/edit', [
            'car' => $car
        ]);
    }

    public function update()
    {
        $id = $_POST['id'];

        Car::update($id, $_POST);

        $this->redirect('/car-rental-system/public/cars');
    }

    public function delete()
    {
        $id = $_GET['id'];

        Car::delete($id);

        $this->redirect('/car-rental-system/public/cars');
    }
}