<?php
define("ROOT","/var/www/ApplicationAdmin/application");
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("MODEL_PATH", ROOT . "/models/");
define("VIEW_PATH", ROOT . "/views/");

require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';

define('HOST', 'localhost');
define('DB', 	'example');
define('LOGIN', 'root');
define('PASS', 	'');

define('PAGINATION_COUNT', 3);