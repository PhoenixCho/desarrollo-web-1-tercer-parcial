<?php
namespace Controllers;
use App\Libs\View;

class HomeController {
    public function index() {
        View::make("home", ["title" => "Vista Home"]);
    }
}
