<?php

/**
 * ------------------------------------------------------------------------
 * Loads Database, Model & View
 * ------------------------------------------------------------------------
 * @category  Loader
 * @package   Core-PHP-Framework
 * @author    Srikant Kumar
 * @copyright Copyright (c) 2023, Srikant Kumar (https://srikantkumar.com/)
 * @license   https://opensource.org/licenses/MIT	MIT License
 * @link	  https://github.com/srikant-kumar/core-php-framework
 * @since	  Version 1.0.0
 */
class Loader
{
    /**
     * ------------------------------------------------------------------------
     * Loads View
     * ------------------------------------------------------------------------
     * @param  string $view
     * @param  array $data
     * @return string html
     */
    public function view($view, $data = [])
    {
        extract($data);
        $view = str_replace('.php', '', $view);
        require_once(APPPATH . 'views/' . $view . '.php');
    }

    /**
     * ------------------------------------------------------------------------
     * Loads Model
     * ------------------------------------------------------------------------
     * @param  string $model_name
     * @return object model
     */
    public function model($model)
    {
        $model = str_replace('.php', '', $model);
        require_once(APPPATH . 'models/' . $model . '.php');

        return (new $model());
    }

    /**
     * ------------------------------------------------------------------------
     * Loads Database
     * ------------------------------------------------------------------------
     * @return object Database
     */
    public function db()
    {
        require_once(MAINPATH . 'Db.php');
        return (Db::load());
    }
}
