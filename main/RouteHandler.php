<?php

/**
 * ------------------------------------------------------------------------
 * Route Handler : Handle All Request
 * ------------------------------------------------------------------------
 * @category  Controller
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */
class RouterHandler
{
    protected $routes = [];

    public function add($route, $controller)
    {
        $this->routes[$route] = $controller;
    }

    public function run()
    {
        $url = get_uri();
        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url];
            $controllerParts = explode('::', $controllerName);
            $controller = $controllerParts[0];
            $method = $controllerParts[1];

            require_once(APPPATH . "controllers/{$controller}.php");

            $controllerInstance = new $controller();
            echo $controllerInstance->$method();
        } else {
            echo "404 Not Found";
        }
    }
}
