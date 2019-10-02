<?php

use controllers\admin\DashboardController;
use controllers\LoginController;
use Core\Helpers;
use core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use models\Auth;
use models\Cookies;
use models\Password;
use models\tables\Users;

$router = new Klein();

$router->get("/?", function (){
    return "Go out";
});

include "web/auth.php";
include "web/admin.php";

$router->dispatch();