<?php
namespace controllers\admin;
use core\abstracts\Controller;
use Klein\Request;
use models\Cookies;
use models\tables\Categories;
use models\tables\Posts;
use models\tables\Users;

class PostsController extends Controller
{
    function create(){
        $users = new Users();
        $categories = new Categories();
        return $this->render("admin/forms/PostForm", [
            "action" => "create",
            "user" => $users->get("id", ["hash" => Cookies::get("auth")]),
            "categories" => $categories->select()
        ]);
    }
    function update($id){
        $posts = new Posts();
        $users = new Users();
        $categories = new Categories();
        if (!$posts->has(["id" => $id])) return false;
        return $this->render("admin/forms/PostForm", [
            "action" => "update",
            "post" => $posts->getById($id),
            "user" => $users->get("id", ["hash" => Cookies::get("auth")]),
            "categories" => $categories->select()
        ]);
    }
    function postCreate(Request $request){
        $posts = new Posts();
        return $posts->insert([
            "title" => $request->param("title"),
            "content" => $request->param("content"),
            "user_id" => $request->param("user_id"),
            "category_id" => $request->param("category_id"),
        ]);
    }
    function postUpdate(Request $request){
        $posts = new Posts();
        return $posts->update([
            "title" => $request->param("title"),
            "content" => $request->param("content"),
            "user_id" => $request->param("user_id"),
            "category_id" => $request->param("category_id"),
        ], [
            "id" => $request->param("id")
        ]);
    }
    function postDelete(Request $request){
        $posts = new Posts();
        return $posts->delete([
            "id" => $request->param("id")
        ]);
    }
}