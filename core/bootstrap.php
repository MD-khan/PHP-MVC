<?php
$app = [];
$app['config'] = require 'config.php'; // change here

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


$app['database'] = new QueryBuilder(
	Connection::connect($app['config']['database'])
);
