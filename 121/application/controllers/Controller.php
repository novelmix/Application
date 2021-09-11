<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.09.21
 * Time: 17:35
 */

class Controller {

    public $model;
    public $view;
    protected $pageData = array();

    public function __construct() {
        $this->view = new View();
        $this->model = new Model();
    }

}