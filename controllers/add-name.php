<?php

// var_dump($_POST);
// var_dump($app['database']);

$app['database']->insert('users',[
    'name' => $_POST['name']
]);

header('Location: /');

