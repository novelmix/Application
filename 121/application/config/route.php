<?php

/*
** Класс маршрутизации
*/

class Route {

    public static function buildRoute() {

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
        if(method_exists($controller, $action)) {
            $controller->$action();
        } else {
            // Without exception just redirect
            Route::ErrorPage404();

        }
    }

//    function ErrorPage404()
//    {
//        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
//        header('HTTP/1.1 404 Not Found');
//        header("Status: 404 Not Found");
//        header('Location:'.$host.'404');
//    }


}