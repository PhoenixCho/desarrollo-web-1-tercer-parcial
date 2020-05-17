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
        $usuario = User::getById($user_id); 
        View::make("user.edit", ["title"=>"Editar perfil", "user"=>$user]);
    }
    
    public static function save(array $params) {
        extract($params);
        User::save($id, $firstname, $lastname);
    }
    public static function all() {}
    public static function create() {}
    public static function delete() {}
}

