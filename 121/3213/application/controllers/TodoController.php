<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.09.21
 * Time: 23:37
 */

class TodoController extends Controller
{
    private $pageTpl = '/views/todo_create.tpl.php';


    public function __construct() {
        $this->model = new TodoModel();
        $this->view = new View();
    }


    public function index() {
        $this->pageData['title'] = "Welcome to my application";
        $this->pageData['logo'] = "Application";

        $this->view->render($this->pageTpl, $this->pageData);
    }
}