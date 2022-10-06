<?php

// dependency 
return [
	'database' => [
		'name' => 'todo',
		'username' => 'monir',
		'password'	=> '',
		'connection' => 'mysql:host=127.0.0.1',
		'port' => 8889,
		'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	],

	'google_maps_api' => [
		'key' => 'fdsfjdskjfksdjf2325425kjfdskfjdskfdsl',
	],

	'stripe_key' => [
		'auth' => 'f40945ksdlfjdksfjdksfdsjsdkf'
	]
];
