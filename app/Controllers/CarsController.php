<?php

namespace Elmouatazbillah\CarRentalSystem\Controllers;

use Elmouatazbillah\CarRentalSystem\Core\Database;

class CarsController
{
    public function index()
    {
        $db = Database::connect();
        $cars = $db->query("SELECT * FROM cars")->fetchAll();

        \Elmouatazbillah\CarRentalSystem\Core\View::render(
            "cars/index",
            ["cars" => $cars]
        );
    }

    public function delete()
    {
        if (!isset($_GET['id'])) {
            header("Location: ?url=cars");
            exit;
        }

        $id = $_GET['id'];

        $db = Database::connect();

        $stmt = $db->prepare("DELETE FROM cars WHERE id = ?");
        $stmt->execute([$id]);

        header("Location: ?url=cars");
        exit;
    }

    public function store()
    {
        $db = Database::connect();

        $stmt = $db->prepare("
            INSERT INTO cars (brand, model, license_plate, price_per_day)
            VALUES (?, ?, ?, ?)
        ");

        $stmt->execute([
            $_POST['brand'],
            $_POST['model'],
            $_POST['license_plate'],
            $_POST['price_per_day']
        ]);

        header("Location: ?url=cars");
        exit;
    }
    
    public function edit()
{
    if (!isset($_GET['id'])) {
        header("Location: ?url=cars");
        exit;
    }

    $id = $_GET['id'];
    $db = Database::connect();

    $stmt = $db->prepare("SELECT * FROM cars WHERE id = ?");
    $stmt->execute([$id]);
    $car = $stmt->fetch();

    if (!$car) {
        echo "Car not found ❌";
        return;
    }

    echo "<h2>Edit Car</h2>";

    echo "
    <form method='POST' action='?url=cars&action=update&id={$car['id']}'>

        Brand:
        <input type='text' name='brand' value='{$car['brand']}' required><br><br>

        Model:
        <input type='text' name='model' value='{$car['model']}' required><br><br>

        License Plate:
        <input type='text' name='license_plate' value='{$car['license_plate']}' required><br><br>

        Price:
        <input type='number' step='0.01' name='price_per_day'
        value='{$car['price_per_day']}' required><br><br>

        <button type='submit'>Update</button>

    </form>
    ";
    }

    public function update()
{
    if (!isset($_GET['id'])) {
        header("Location: ?url=cars");
        exit;
    }

    $id = $_GET['id'];

    $db = Database::connect();

    $stmt = $db->prepare("
        UPDATE cars
        SET brand = ?,
            model = ?,
            license_plate = ?,
            price_per_day = ?
        WHERE id = ?
    ");

    $stmt->execute([
        $_POST['brand'],
        $_POST['model'],
        $_POST['license_plate'],
        $_POST['price_per_day'],
        $id
    ]);

    header("Location: ?url=cars");
    exit;
}
}