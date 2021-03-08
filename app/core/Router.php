<?php

namespace app\core;

use app\core\helpers\DebugHelper;
use app\core\lib\Exception;

/**
 * Application router class.
 */
class Router
{
    /**
     * Application registered routes.
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Request params.
     *
     * @var array
     */
    protected $params = [];

    /**
     * Adds the modified to regexp routes to the local params
     *
     * @param string $route
     * @param array $params
     * @return void
     */
    private function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    /**
     * Finds out if the visited url exists in routes.
     *
     * @return boolean
     */
    public function match() : bool
    {
        // Visited URL
        $url = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route => $params) {
            // If the route equal to visited URL
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;

                return true;  
            } 
        }

        return false;
    }

    /**
     * Loads the registered routes.
     *
     * @return void
     */
    private function load()
    {
        $routes = require 'app/config/routes.php';

        foreach ($routes as $route => $params) {
            $this->add($route, $params);
        }
    }

    /**
     * Executes aplication router.
     *
     * @return void
     */
    public function execute()
    {
        // Loading
        $this->load();

        // If the visited route exists
        if ($this->match()) {
            $path = 'app\controllers\\' . $this->params['controller'];
            
            // If the controller of route exists
            if (class_exists($path)) {
                $action = $this->params['action'];

                // If the action of controller exists
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } 
            } 
        } else {
            Exception::throw(404);
        }
    }
}