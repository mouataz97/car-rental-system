<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;

    public static function connect()
    {
        if (self::$instance === null) {

            try {

                self::$instance = new PDO(
                    "mysql:host=localhost;dbname=car_rental_db;charset=utf8",
                    "root",
                    ""
                );

                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $e) {

                die("Database Connection Failed: " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}