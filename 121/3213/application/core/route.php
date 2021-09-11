<?php
class Route {

public static function start()
{

    /*Контроллер и action по умолчанию*/
    $controllerName = "MainController";
    $modelName = "MainModel";
    $action = "index";

    $route = explode("/", $_SERVER['REQUEST_URI']);

    /*Определяем контроллер*/
    if($route[1] != '') {
    $controllerName = ucfirst($route[1]. "Controller");
    $modelName = ucfirst($route[1]. "Model");
    }


    require_once CONTROLLER_PATH . $controllerName . ".php"; //MainController.php
    require_once MODEL_PATH . $modelName . ".php"; //MainModel.php

    if(isset($route[2]) && $route[2] !='') {
    $action = $route[2];
    }

    $controller = new $controllerName();
    //        $controller->$action(); // $controller->index();
    if(method_exists($controller, $action))
    {
    // call controller action
    $controller->$action();
    } else {
    // Without exception just redirect
    Route::ErrorPage404();
    }

    }

    private static function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }



//    $controller_name = 'Todo';
//    $action_name = 'index';
//
//    $routes = explode('/', $_SERVER['REQUEST_URI']);
//
//    // получаем имя контроллера
//    if ( !empty($routes[1]) )
//    {
//        $controller_name = $routes[1];
//    }
//
//    // получаем имя экшена
//    if ( !empty($routes[2]) )
//    {
//        $action_name = $routes[2];
//    }
//
//    // добавляем префиксы
//    $model_name = 'Model_'.$controller_name;
//    $controller_name = 'Controller_'.$controller_name;
//    $action_name = 'action_'.$action_name;
//
//    // подцепляем файл с классом модели (файла модели может и не быть)
//
//    $model_file = strtolower($model_name).'.php';
//    $model_path = "application/models/".$model_file;
//    if(file_exists($model_path))
//    {
//        include "application/models/".$model_file;
//    }
//
//    // подцепляем файл с классом контроллера
//    $controller_file = strtolower($controller_name).'.php';
//    $controller_path = "application/controllers/".$controller_file;
//    if(file_exists($controller_path))
//    {
//        include "application/controllers/".$controller_file;
//    }
//    else
//    {
//        Route::ErrorPage404();
//    }
//
//    // создаем контроллер
//    $controller = new $controller_name;
//
//
//    if(method_exists($controller, $actionName))
//    {
//        // вызываем действие контроллера
//        $controller->$actionName();
//    }
//    else
//    {
//        // здесь также разумнее было бы кинуть исключение
//        Route::ErrorPage404();
//    }
//
//}
//
//    function ErrorPage404()
//    {
//        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
//        header('HTTP/1.1 404 Not Found');
//        header("Status: 404 Not Found");
//        header('Location:'.$host.'404');
//    }

}