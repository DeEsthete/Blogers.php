<?php

use controllers\admin\CategoriesController;
use controllers\admin\DashboardController;
use controllers\admin\PostsController;
use controllers\api\TokenController;
use controllers\api\UsersController;
use Klein\Request;
use Klein\Response;
use models\Hash;
use models\tables\Users;

$router->with("/api", function () use ($router) {

    $router->post("/token/?", function (Request $request, Response $response) {
        header("Content-Type: application/json: charset=utf-8", true);
        $username = $request->param("username");
        $password = $request->param("password");

        $controller = new TokenController();
        return $controller->generate($username, $password);
    });

    $router->post("/users/?", function (Request $request, Response $response) {
        header("Content-Type: application/json: charset=utf-8", true); //-----------------------------------------------
        Hash::checkToken($request, $response);

        $controller = new UsersController();
        return $controller->getAll();
    });

    $router->with("/posts", function () use ($router) {
        $controller = new PostsController();
        $dashboard = new DashboardController();

        $router->post("/?", function (Request $request, Response $response) use($dashboard) {
            Hash::checkToken($request, $response);
            return $dashboard->show();
        });

        $router->post("/create/?", function (Request $request, Response $response) use($controller) {
            Hash::checkToken($request, $response);
            return $controller->postCreate($request);
        });

        $router->post("/update/?", function (Request $request, Response $response) use($controller) {
            Hash::checkToken($request, $response);
            return $controller->postUpdate($request);
        });

        $router->post("/delete/?", function (Request $request, Response $response) use($controller) {
            Hash::checkToken($request, $response);
            return $controller->postDelete($request);
        });
    });

    $router->with("/categories", function () use ($router) {
        $controller = new CategoriesController();

        $router->post("/?", function (Request $request, Response $response) use ($controller) {
            Hash::checkToken($request, $response);
            return $controller->show();
        });

        $router->post("/create/?", function (Request $request, Response $response) use($controller) {
            Hash::checkToken($request, $response);
            return $controller->postCreate($request);
        });

        $router->post("/update/?", function (Request $request, Response $response) use($controller) {
            Hash::checkToken($request, $response);
            return $controller->postUpdate($request);
        });

        $router->post("/delete/?", function (Request $request, Response $response) use($controller) {
            Hash::checkToken($request, $response);
            return $controller->postDelete($request);
        });
    });
});