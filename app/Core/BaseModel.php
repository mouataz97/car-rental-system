<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class BaseModel
{
    protected static function db()
    {
        return Database::connect();
    }
}