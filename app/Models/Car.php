<?php

namespace Elmouatazbillah\CarRentalSystem\Models;

use Elmouatazbillah\CarRentalSystem\Core\BaseModel;

class Car extends BaseModel
{
    public static function all()
    {
        $db =  self::db();
        $stmt = $db->query("SELECT * FROM cars");
        return $stmt->fetchAll();
    }

    public static function find($id)
    {
        $db = self::db();
        $stmt = $db->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function create($data)
    {
        $db = self::db();
        $stmt = $db->prepare("INSERT INTO cars (brand, model, license_plate, price_per_day, status) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['brand'],
            $data['model'],
            $data['license_plate'],
            $data['price_per_day'],
            $data['status']
        ]);
    }

    public static function update($id, $data)
    {
        $db = self::db();
        $stmt = $db->prepare("UPDATE cars SET brand = ?, model = ?, license_plate = ?, price_per_day = ?, status = ? WHERE id = ?");
        return $stmt->execute([
            $data['brand'],
            $data['model'],
            $data['license_plate'],
            $data['price_per_day'],
            $data['status'],
            $id
        ]);
    }

    public static function delete($id)
    {
        $db = self::db();
        $stmt = $db->prepare("DELETE FROM cars WHERE id = ?");
        return $stmt->execute([$id]);
    }
}