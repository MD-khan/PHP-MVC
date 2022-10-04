<?php


require 'core/bootstrap.php';

//$router = Router::load('routes.php');


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

// require $router->direct(Request::uri());
// //require Router::load('routes.php')
//  //->direct($uri); // method chaining