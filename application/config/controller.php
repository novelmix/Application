<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.09.21
 * Time: 16:50
 */


class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function index()
    {
    }
}