<?php

/**
 * ------------------------------------------------------------------------
 * Main : Auto Loads All Core Files 
 * ------------------------------------------------------------------------
 * @category  Autoloader
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */

// Enable output buffering
ob_start();

// Enable sessions
session_start();

require_once(MAINPATH . 'Helper.php');
require_once(MAINPATH . 'MainController.php');
require_once(MAINPATH . 'MainModel.php');
require_once(APPPATH . 'routes/route.php');
