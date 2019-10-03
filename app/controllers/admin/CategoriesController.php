<?php
namespace controllers\admin;
use core\abstracts\Controller;
use Klein\Request;
use models\tables\Categories;

class CategoriesController extends Controller
{
    function show(){
        $table = new Categories();
        $categories = $table->select();
        return $this->render("admin/Categories", [
            "categories" => $categories
        ]);
    }
    function create(){
        $categories = new Categories();
        return $this->render("admin/forms/CategoryForm", [
            "action" => "create",
            "categories" => $categories->select()
        ]);
    }
    function update($id){
        $categories = new Categories();
        if (!$categories->has(["id" => $id])) return false;
        return $this->render("admin/forms/CategoryForm", [
            "action" => "update",
            "category" => $categories->getById($id)
        ]);
    }
    function postCreate(Request $request){
        $categories = new Categories();
        return $categories->insert([
            "name" => $request->param("name")
        ]);
    }
    function postUpdate(Request $request){

        $categories = new Categories();
        return $categories->update([
            "name" => $request->param("name")
        ], [
            "id" => $request->param("id")
        ]);
    }
    function postDelete(Request $request){
        $categories = new Categories();
        return $categories->delete([
            "id" => $request->param("id")
        ]);
    }
}