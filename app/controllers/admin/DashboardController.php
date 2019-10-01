<?php
namespace controllers\admin;


use core\abstracts\Controller;

class DashboardController extends Controller
{
    function show(){
        return $this->render("admin/Dashboard.tpl");
    }
}