<?php
namespace App\Libs;

class Router {
    public static $routes =[];

    // ["user/index"]
    // $url = "user/edit/1"
    // mvcfriends.com/user/edit/1
    // ["route" => "user/edit", "params" => ["user_id"]]
    public static function get(string $url) {
        $seg = explode("/", $url);
        $route = array_shift($seg);
        $action = array_shift($seg);
        $params = $seg;
        array_push(self::$routes, ["route" => $route."/".$action, "params" => $params]);
    }
}