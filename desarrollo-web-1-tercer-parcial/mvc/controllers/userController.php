<?php
namespace Controllers;
use App\Libs\View;

require MODELS_DIR."users.php";

class UserController {
    // http://mvcfriends.com/controller/action
    public static function index() {
        $users = getAllUsers();
        View::make("user.index", ["title" => "Vista Users", "users" => $users]);
    }

    public static function login() {
        View::make("user.login", ["title"=>"Inicio de sesión"]);
    }

    public static function all() {}
    public static function save() {}
    public static function create() {}
    public static function delete() {}
}

