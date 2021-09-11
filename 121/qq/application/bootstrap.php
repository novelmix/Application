<?php

session_start();
require_once 'config/model.php';
require_once 'config/view.php';
require_once 'config/controller.php';
//$_SERVER['DOCUMENT_ROOT'] //server ROOT
//define("ROOT",$_SERVER['DOCUMENT_ROOT']);
//define("CONTROLLER_PATH", ROOT . "/controllers/");
//define("MODEL_PATH", ROOT . "/models/");
//define("VIEW_PATH", ROOT . "/views/");
//define("DB_PATH", ROOT . "/config/");
//require_once DB_PATH. 'db.php';
//require_once MODEL_PATH. 'Model.php';
//require_once VIEW_PATH. 'View.php';
//require_once CONTROLLER_PATH. 'Controller.php';
//require_once ROOT. "/class/pagination.php";
function checkAuth()
{
    $cheker = false;
    $status = $_SESSION['login_status'] ?? '';
    if($status == 'access_granted')
        $cheker = true;

    return $cheker;
}

require_once 'config/route.php';
Route::start();