<?php

use controllers\admin\DashboardController;
use controllers\LoginController;
use Core\Helpers;
use core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use models\Password;
use models\tables\Users;

$router = new Klein();

$router->get("/?", function (){
//    $users = new Users();
//    $users->insert([
//        "username" => "admin",
//        "name" => "admin",
//        "password" => Password::hash("admin"),
//        "email" => "ohMy@ohmy.com"
//    ]);
});

$router->with("/login", function () use($router) {
    $controller = new LoginController();
    $router->get("/?", function () use ($controller){
        return $controller->show();
    });
    $router->post("/?", function (Request $request, Response $response) use ($controller){
        $username = $request->param("username");
        $password = $request->param("password");
        if ($controller->make($username, $password)) {
            $url = Helpers::url("admin");
        }
        else{
            $url = Helpers::url("login");
        }
        return $response->redirect($url)->send();
    });
});

$router->with("/admin", function () use ($router) {
    $router->get("/?", function (Response $response){
        return $response->redirect(Helpers::url("admin", "Dashboard"))->send();
    });

    $router->get("/Dashboard/?", function(){
        $controller = new DashboardController();
        return $controller->show();
    });
});

$router->dispatch();