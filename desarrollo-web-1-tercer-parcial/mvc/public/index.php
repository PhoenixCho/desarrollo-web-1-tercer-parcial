<?php
require "../config.php";
require APP_DIR."helpers.php";
require APP_DIR."app/autoload.php";
require APP_DIR."app/libs/routes.php";

use App\Libs\Request;
use App\Libs\Router;

// controller($_GET);
// Request::call($_GET);


// var_dump(Router::$routes);
$req = new Request($_GET);


