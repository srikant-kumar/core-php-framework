<?php

/**
 * ------------------------------------------------------------------------
 * Sample Conroller HomeController
 * ------------------------------------------------------------------------
 */
class HomeController extends MainController
{
    public function index()
    {
        /**
         * Sample Call Of Model
         */

        //$home = $this->model('HomeModel');
        //$home->select();

        /**
         * Sample Call Of View
         */
        $data['text'] = 'Sample Text Data For View';
        return $this->view('home', $data);
    }
}
