<?php


class MainController extends Controller {

    private $pageTpl = '/views/main.tpl.php';


    public function __construct() {
        $this->model = new MainModel();
        $this->view = new View();
    }


    public function index() {
        $this->pageData['title'] = "Вход в личный кабинет";
        $this->view->render($this->pageTpl, $this->pageData);
    }



}