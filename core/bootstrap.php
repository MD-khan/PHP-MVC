<?php

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
