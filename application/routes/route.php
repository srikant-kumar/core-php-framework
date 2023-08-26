<?php

/**
 * -------------------------------------------------------------------
 * Register Routes
 * -------------------------------------------------------------------
 * Note : Currently this version not support specific method for 
 * defining the route
 * @category  Controller
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */

require_once(MAINPATH . 'RouteHandler.php');

// Initialize the router
$router = new RouterHandler();

// Define routes
$router->add('/', 'HomeController::index');

// Dispatch the route
$router->run();
