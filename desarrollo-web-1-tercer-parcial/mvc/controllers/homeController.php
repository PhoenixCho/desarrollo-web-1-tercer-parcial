<?php
namespace Controllers;
use App\Libs\View;

class HomeController {
    public static function index() {
        View::make("home", ["title" => "Vista Home"]);
    }
}
