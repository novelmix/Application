<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.09.21
 * Time: 22:32
 */

class MainController extends Controller
{
    private $pageTpl = '/views/main.tpl.php';


    public function __construct() {
        $this->model = new MainModel();
        $this->view = new View();
    }


    public function index() {
        $this->pageData['title'] = "Welcome to my application";
        $this->pageData['logo'] = "Application";

        $this->view->render($this->pageTpl, $this->pageData);
    }
}
