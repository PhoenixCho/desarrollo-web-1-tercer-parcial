<?php
require "../config.php";
require APP_DIR."helpers.php";
require APP_DIR."app/autoload.php";

use App\Libs\Request;
use App\Libs\Router;

// controller($_GET);
// Request::call($_GET);
Router::get("user/new");
Router::get("user/index");
Router::get("user/edit/user_id");
Router::get("user/login");
Router::get("user/logout");
Router::get("user/profile/user_id");

var_dump(Router::$routes);
exit();
$req = new Request($_GET);


