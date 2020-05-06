<?php
namespace App\Libs;

class View {
    public static function make(string $name, $vars = []) {
        extract($vars);
        // segmentar el nombre de la vista Ej: user.index
        $seg = explode(".", $name);
        // ["user", "index"]
        if (count($seg) > 1) {
            $view_name = array_pop($seg);
            // "index"
            $view_dirs = implode("/", $seg);
            // "user"
            $view_file = $view_dirs . "/" . $view_name;
            // "user/index"
        } else {
            $view_file = $name;
        }

        $file = VIEWS_DIR . $view_file . ".tpl.php";
        if (file_exists($file)) {
            require $file;
        } else {
            http_response_code(404);
            exit("La vista $name no existe");
        }
    }
}
