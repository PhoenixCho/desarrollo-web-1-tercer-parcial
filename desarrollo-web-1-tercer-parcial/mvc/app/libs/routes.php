<?php
namespace App\Libs;
use App\Libs\Router;
/** 
 * Archivo de definicion de rutas
*/

Router::get("home/index");
Router::get("user/index");
Router::get("about/index");
Router::get("user/new");
Router::get("user/edit/user_id");
Router::get("user/login");
Router::get("user/logout");
Router::get("user/profile/user_id");
Router::post("user/save");