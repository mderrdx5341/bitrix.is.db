<?php
namespace App;

class Router
{
	private $routeMap;
	private $path;

	public function __construct(string $path)
	{
		$this->routeMap = include __DIR__ . '/../.route.map.php';
		$this->path = $path;
	}

	public function run() : RouteData
	{
		$routeData = new RouteData();
		$args = [];
		foreach ($this->routeMap as $route => $ex) {
			if(preg_match($route, $this->path, $args)) {
				$routeData->setController($ex['controller']);
				$routeData->setAction($ex['action']);
				unset($args[0]);
				$routeData->setArgs($args);
			} else {
				$routeData->setController('App\Controllers\Page404');
				$routeData->setAction('index');
				$routeData->setArgs([]);
			}
		}

		return $routeData;
	}
}
