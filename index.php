<?php

/**
 * ------------------------------------------------------------------------
 * Core PHP Framework
 * ------------------------------------------------------------------------
 * @category  Database
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 * @version   1.0.0
 */
$dir = __DIR__;
$dir = str_replace('\\', '/', $dir) . '/';

define('BASEPATH', $dir);
define('APPPATH', $dir . 'application/');
define('MAINPATH', $dir . 'main/');

define('ENVIRONMENT', 'development');
/**
 * ---------------------------------------------------------------
 * ERROR REPORTING 
 * ---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;

    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        } else {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment is not set correctly.';
        exit(1); // EXIT_ERROR
}
/**
 * ---------------------------------------------------------------
 * Adding Support For Composer Vendor If Exist
 * ---------------------------------------------------------------
 */
$directory = BASEPATH . 'vendor/autoload.php';
if (file_exists($directory)) {
    require($directory);
}

require(MAINPATH . 'Main.php');
