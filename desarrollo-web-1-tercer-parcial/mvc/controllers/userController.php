<?php
namespace Controllers;
use App\Libs\View;
use Models\User;

require MODELS_DIR."users.php";

class UserController {
    // http://mvcfriends.com/controller/action
    public function index() {
        $model = new User();
        $users = $model->getAllUsers();
        View::make("user.index", ["title" => "Vista Users", "users" => $users]);
    }

    public function login() {
        View::make("user.login", ["title"=>"Inicio de sesión"]);
    }

    public function edit(array $params) {
        extract($params);
        $model = new User();
        $user = $model->getById($user_id);
        View::make("user.edit", ["title"=>"Editar perfil", "user"=>$user]);
    }

    public static function all() {}
    public static function save() {}
    public static function create() {}
    public static function delete() {}
}

