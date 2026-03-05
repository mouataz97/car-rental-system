<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class Validator
{
    public static function required($value)
    {
        return !empty(trim($value));
    }

    public static function number($value)
    {
        return is_numeric($value);
    }
}