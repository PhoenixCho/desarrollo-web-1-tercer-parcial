<?php
/**
 * Funciones para que la app opere correctamente
 */

function view(string $name, $vars = []) {
    extract($vars);
    $file = VIEWS_DIR.$name.".tpl.php";
    if (file_exists($file)) {
        require $file;
    } else {
        http_response_code(404);
        exit("La vista $name no existe");
    }
}

function controller(array $url) {
    if (empty($url)) {
        require CONTROLLERS_DIR."home.php";
    } elseif (isset($url['url'])) {
        $file = CONTROLLERS_DIR . $url['url'] . ".php";
        if (file_exists($file)) {
            require $file;
        } else {
            http_response_code(404);
            exit("Pagina no encontrada");
        }
    }
}

function incLayout(string $layout, array $vars = null) {
    if ($vars) {
        extract($vars);
    }
    require_once VIEWS_DIR . "layout/" . $layout . ".tpl.php";
    // views/layout/header.tpl.php
}