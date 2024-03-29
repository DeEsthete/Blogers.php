<?php

use controllers\admin\CategoriesController;
use controllers\admin\DashboardController;
use controllers\admin\PostsController;
use Core\Helpers;
use Klein\Request;
use Klein\Response;
use models\Auth;

$router->with("/admin", function () use ($router) {
    $router->get("/?", function (Request $request, Response $response){
        return $response->redirect(Helpers::url("admin", "dashboard"))->send();
    });

    $router->get("/dashboard/[i:page]/?", function (Request $request, Response $response){
        Auth::middleware($response);
        $controller = new DashboardController();
        $controller->getByPage($request->param("page"));
        //return $controller->show();
    });

    $router->with("/posts", function () use ($router) {
        $controller = new PostsController();

        $router->get("/create/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            return $controller->create();
        });

        $router->get("/update/[i:id]/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            return $controller->update($request->param("id"));
        });

        $router->post("/create/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->postCreate($request);
            return $response->redirect(Helpers::url("admin"))->send();
        });

        $router->post("/update/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->postUpdate($request);
            return $response->redirect(Helpers::url("admin"))->send();
        });

        $router->get("/delete/[i:id]/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->postDelete($request);
            return $response->redirect(Helpers::url("admin"))->send();
        });
    });

    $router->with("/categories", function () use ($router) {
        $controller = new CategoriesController();

        $router->get("/[i:page]/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->getByPage($request->param("page"));
            //return $controller->show();
        });

        $router->get("/create/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            return $controller->create();
        });

        $router->get("/update/[i:id]/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            return $controller->update($request->param("id"));
        });

        $router->post("/create/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->postCreate($request);
            return $response->redirect(Helpers::url("admin/categories"))->send();
        });

        $router->post("/update/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->postUpdate($request);
            return $response->redirect(Helpers::url("admin/categories"))->send();
        });

        $router->get("/delete/[i:id]/?", function (Request $request, Response $response) use ($controller) {
            Auth::middleware($response);
            $controller->postDelete($request);
            return $response->redirect(Helpers::url("admin/categories"))->send();
        });
    });
});