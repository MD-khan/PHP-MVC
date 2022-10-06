<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

// use App\Core\Router;
// use App\Core\Requests;

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());


function dd($val)
{
    echo "<pre>";
    die(var_dump($val));
    echo "</pre>";
}
