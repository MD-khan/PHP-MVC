<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';


 Router::load('routes.php')
    ->direct(Request::uri(), Request::method());


function dd($val)
{
    echo "<pre>";
    die(var_dump($val));
    echo "</pre>";
}
