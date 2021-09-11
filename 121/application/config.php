<?php
//Текс для проверки при подключении конфига
//echo "config";
session_start();
define("ROOT","/var/www/ApplicationAdmin/application");
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("MODEL_PATH", ROOT . "/models/");
define("VIEW_PATH", ROOT . "/views/");

require_once("config/DataBase.php");
require_once("config/route.php");

require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';
function checkAuth()
{
    $cheker = false;
    $status = $_SESSION['login_status'] ?? '';
    if($status == 'access_granted')
        $cheker = true;

    return $cheker;
}


Route::buildRoute();