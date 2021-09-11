<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.09.21
 * Time: 20:22
 */

class AccountController extends Controller
{
    private $pageTpl = '/views/account.tpl.php';


    public function __construct() {
        $this->model = new AccountModel();
        $this->view = new View();
    }


    public function index() {
        $this->pageData['title'] = "Аккаунд Админа";
        $this->view->render($this->pageTpl, $this->pageData);
    }
}