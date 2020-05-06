<?php
require "../config.php";
require APP_DIR."helpers.php";
require APP_DIR."app/autoload.php";

use App\Libs\Request;

// controller($_GET);
// Request::call($_GET);
$req = new Request($_GET);

