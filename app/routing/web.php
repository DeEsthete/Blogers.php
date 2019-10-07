<?php

use controllers\PostsController;
use Klein\Klein;
use Klein\Request;

$router = new Klein();

$router->get("/?", function (){
    return "Go out";
});

$router->get("/page/[i:page]/?", function (Request $request) {
    $controller = new PostsController();
    $controller->getByPage($request->param("page"));
});

$router->get("/post/[i:id]/?", function () {
});

include "web/auth.php";
include "web/admin.php";
include "api.php";

$router->dispatch();