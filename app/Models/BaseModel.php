<?php

namespace Elmouatazbillah\CarRentalSystem\Models;
use Elmouatazbillah\CarRentalSystem\Core\Database;

class BaseModel
{
    protected static function db()
    {
        return Database::connect();
    }
}