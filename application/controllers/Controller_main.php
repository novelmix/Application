<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 11.09.21
 * Time: 16:37
 */



class Controller_main extends Controller
{


    function action_index()
    {
        unset($_SESSION['open_new_edit_window']);

        $currentPage = $_GET['page'] ?? 1;

        $model = new Model_main();
        $data = $model->paginatorData(PAGINATION_COUNT , $currentPage);
        $paginator =  $model->paginatorLinks(PAGINATION_COUNT, $currentPage);

        $this->view->generate('index_view.php', 'template_view.php', $data, $paginator);
    }


    function action_create()
    {
        unset($_SESSION['open_new_edit_window']);
        $this->view->generate('create_view.php', 'template_view.php');
    }



    function action_store()
    {
        unset($_SESSION['open_new_edit_window']);
        $model = new Model_main();
        $result = $model->insert();

        if($result)
            $msg = "Успешно сохранено";
        else
            $msg = "Ошибка сохранения";

        $this->view->generate('404_view.php', 'template_view.php', $msg);
    }

    function action_edit()
    {
        $model = new Model_main();
        $data = $model->getById();

        $this->view->generate('edit_view.php', 'template_view.php', $data);
    }

    function action_update()
    {
        $model = new Model_main();
        $result = $model->update();

        if($result)
            $msg = "Успешно сохранено";
        else
            $msg = "Ошибка сохранения";

        $this->view->generate('404_view.php', 'template_view.php', $msg);

    }
    function action_delete()
    {
        $model = new Model_main();
        $result = $model->delete();

        if($result)
            $msg = "Успешно Удалено";
        else
            $msg = "Ошибка Удаления";

        $this->view->generate('404_view.php', 'template_view.php', $msg);
    }

}
