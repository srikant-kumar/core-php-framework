<?php
require_once(MAINPATH . 'Loader.php');
/**
 * ------------------------------------------------------------------------
 * Main Controller
 * ------------------------------------------------------------------------
 * @category  Controller
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */
class MainController
{
    protected $db;

    public function __construct()
    {
        $this->db = (new Loader())->db();
    }

    protected function view($view, $data = [])
    {
        return (new Loader())->view($view, $data);
    }

    protected function model($model)
    {
        return (new Loader())->model($model);
    }
}
