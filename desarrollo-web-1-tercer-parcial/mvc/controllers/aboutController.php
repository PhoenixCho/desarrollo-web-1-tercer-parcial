<?php
namespace Controllers;
use App\Libs\View;

class AboutController {
    public function index() {
        View::make("about", ["title" => "Vista About"]);
    }

}
