<?php
namespace controllers;
use core\abstracts\Controller;
use models\Auth;

class LoginController extends Controller
{
    function show(){
        return $this->render("admin/login", [
            "title" => "Login"
        ]);
    }

    function make($username, $password){
        return Auth::login($username, $password);
    }
}