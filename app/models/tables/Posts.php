<?php
namespace models\tables;
use models\Table;

class Posts extends Table
{
    protected static $table_name = "posts";

    function map($array){
        $categories = new Categories();
        $users = new Users();
        foreach ($array as &$item){
            $id = $item["category_id"];
            $item["category"] = $categories->get("*", ["id" => $id]);
            $userId = $item["user_id"];
            $item["author"] = $users->get("*", ["id" => $userId]);
        }

        return $array;
    }
}