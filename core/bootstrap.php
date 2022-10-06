<?php

use App\Core\App;

App::bind('config', $config = require 'config.php');

//die(var_dump(App::get('config')));

App::bind('database', new QueryBuilder(
	Connection::connect($config['database'])
));


// App::bind('config', require 'config.php');

// die(var_dump(App::get('config')));

// App::bind('database', new QueryBuilder(
// 	Connection::connect(App::get('config')['database'])
// ));

function view($name, $data)
{
	extract($data);
	return require "app/views/{$name}.view.php";
}


function redirect($path)
{
	header("Location: /{$path}");
}
