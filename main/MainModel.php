<?php

/**
 * ------------------------------------------------------------------------
 * Main Model
 * ------------------------------------------------------------------------
 * @category  Controller
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */
class MainModel
{
    protected $db;

    public function __construct()
    {
        $this->db = (new Loader())->db();
    }
}
