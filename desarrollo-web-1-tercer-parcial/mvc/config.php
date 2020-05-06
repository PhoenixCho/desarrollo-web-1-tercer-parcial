<?php
ini_set("display_errors", true);
error_reporting(E_ALL);

// Definir constantes con las rutas principales de la app
// Controllers
define("CONTROLLERS_DIR", __DIR__."/controllers/");
// Views
define("VIEWS_DIR", __DIR__."/views/");
// Models
define("MODELS_DIR", __DIR__."/models/");

// App dir /usr/local/var/www/tercer-parcial/mvc
define("APP_DIR", __DIR__."/");