<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.09.21
 * Time: 23:28
 */

class LoginController extends Controller
{
    private $pageTpl = '/views/login.tpl.php';


    public function __construct() {
        $this->model = new LoginModel();
        $this->view = new View();
    }


    public function index() {
        $this->pageData['title'] = "Вход";

        $this->view->render($this->pageTpl, $this->pageData);
}
}