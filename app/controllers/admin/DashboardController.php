<?php
namespace controllers\admin;


use core\abstracts\Controller;
use models\tables\Posts;

class DashboardController extends Controller
{
    function show(){
        $table = new Posts();
        $posts = $table->select();
        $posts = $table->map($posts);
        return $this->render("admin/Dashboard", [
            "posts" => $posts
        ]);
    }
}