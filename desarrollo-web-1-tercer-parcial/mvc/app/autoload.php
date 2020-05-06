<?php
return
    spl_autoload_register(function ($classname) {
        // exit($classname);
        // App\Libs\View
        // var_dump($classname);
        $path = strtolower($classname);
        // app\libs\view
        $path = str_replace("\\", "/", $path);
        // app/libs/view
        $path = APP_DIR . $path . ".php";
        // /usr/local/var/www/tercer-parcial/mvc/app/libs/view.php
        // exit($path);

        // validar la existencia del archivo file_exists ó is_readable
        if (is_readable($path)) {
            require_once $path;
        } else {
            return false;
        }
    });