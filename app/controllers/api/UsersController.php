<?php
namespace controllers\api;


use core\abstracts\ApiController;
use models\tables\Users;

class UsersController extends ApiController
{
    function getAll(){
        $users = new Users();

        return $this->render($users->select(["id", "username"]), 0);
    }
}