<?php
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

    $router->get("/dashboard/?", function (Request $request, Response $response){
        Auth::middleware($response);
        $controller = new DashboardController();
        return $controller->show();
    });

    $router->with("/posts", function () use ($router) {
        $controller = new PostsController();

        $router->get("/create/?", function () use ($controller) {
            return $controller->create();
        });

        $router->get("/update/[i:id]/?", function (Request $request) use ($controller) {
            return $controller->update($request->param("id"));
        });

        $router->post("/create/?", function (Request $request, Response $response) use ($controller) {
            $controller->postCreate($request);
            return $response->redirect(Helpers::url("admin"))->send();
        });

        $router->post("/update/?", function (Request $request, Response $response) use ($controller) {
            $controller->postUpdate($request);
            return $response->redirect(Helpers::url("admin"))->send();
        });

        $router->get("/delete/[i:id]/?", function (Request $request, Response $response) use ($controller) {
            $controller->postDelete($request);
            return $response->redirect(Helpers::url("admin"))->send();
        });
    });
});