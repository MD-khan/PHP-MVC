<?php
class Router
{

	public $routes = [
		'GET' => [],
		'POST' => []
	];


	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}




	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}


	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}



	public function direct($uri, $requestType)
	{
		//die(var_dump($uri, $requestType));

		if (array_key_exists($uri, $this->routes[$requestType])) {

			return $this->controllerMethod(
				//... Spread Operator
				...explode('@', $this->routes[$requestType][$uri])
			);
		}
		throw new Exception('No route define for the URI');
	}


	protected function controllerMethod($controller, $method)
	{
		$controller = new $controller;
	
		if (!method_exists($controller, $method)) {
			throw new Exception(
				"{$controller} does not respond to the {$method} action"
			);
		}

		return ($controller)->$method();
	}
}
