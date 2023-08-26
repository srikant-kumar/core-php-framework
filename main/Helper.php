<?php

/**
 * ------------------------------------------------------------------------
 * Helper Functions
 * ------------------------------------------------------------------------
 * @category  Helper
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */


if (!function_exists('url')) {
    function url($path = '')
    {
        $url = '';
        $url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $url .= "://" . $_SERVER['HTTP_HOST'];
        $url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

        return $url . $path;
    }
}
if (!function_exists('get_uri')) {
    function get_uri()
    {
        $script =  str_replace(('/' . basename(($_SERVER['SCRIPT_NAME']))), "", $_SERVER['SCRIPT_NAME']);
        $uri = str_replace($script, '', $_SERVER['REQUEST_URI']);
        return $uri ?? '/';
    }
}

if (!function_exists('p')) {
    function p($data)
    {
        echo '<pre>';
        print_r($data);
    }
}

if (!function_exists('pd')) {
    function pd($data)
    {
        echo '<pre>';
        print_r($data);
        die;
    }
}
