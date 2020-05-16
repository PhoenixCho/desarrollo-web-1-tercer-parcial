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

    public static function exists(string $patch) {

        $find = array_search($patch, array_column(self::$routes, "route"));

        if ($find === false){
            http_response_code(404);
            exit("Pagina no encontrada");
            return false;
        } else {

            if (count(self::$routes[$find]["params"]) > 0) {
                return self::$routes[$find]["params"][0];
            } else {
                 return "";
            }
        }
    }
}
