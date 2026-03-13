<?php

namespace Elmouatazbillah\CarRentalSystem\Core;

class BaseController
{
    protected function view($view, $data = [])
    {
        extract($data);
        include __DIR__ . "/../Views/" . $view . ".php";
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}