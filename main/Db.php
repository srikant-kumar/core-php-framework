<?php

/**
 * ------------------------------------------------------------------------
 * Databse Connection Class
 * ------------------------------------------------------------------------
 * @category  Database
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */
class Db
{


    /**
     * ------------------------------------------------------------------------
     * Loads Database
     * ------------------------------------------------------------------------
     *
     * @return object
     */
    public static function load()
    {
        require(APPPATH . 'db/db.php');
        $db = new mysqli($db_credentials['host'], $db_credentials['username'], $db_credentials['password'], $db_credentials['database'], $db_credentials['port']);
        if ($db->connect_error) {
            die("Database connection error: " . $db->connect_error);
        }
        return $db;
    }
}
