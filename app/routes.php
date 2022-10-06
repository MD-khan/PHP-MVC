<?php
$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');


$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
