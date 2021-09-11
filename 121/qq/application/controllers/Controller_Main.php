<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 11.09.21
 * Time: 16:37
 */

class Controller_Main
{
    function action_index()
    {
        unset($_SESSION['open_new_edit_window']);


        $model = new Model_Main();

        $this->view->generate('index_todo_view.php', 'template_view.php');
    }
}