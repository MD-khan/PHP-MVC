<?php
$app = [];
$app['config'] = require 'config.php'; // change here

$app['database'] = new QueryBuilder(
	Connection::connect($app['config']['database'])
);
