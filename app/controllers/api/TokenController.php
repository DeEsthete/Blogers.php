<?php
namespace controllers\api;
use core\abstracts\ApiController;
use models\Auth;
use models\Hash;
use models\tables\Users;

class TokenController extends ApiController
{
    const NO_USERNAME_PASSWORD = 1;

    function generate($username, $password){
        if (!Auth::login($username, $password)){
            return $this->render([], self::NO_USERNAME_PASSWORD);
        }
        $token = Hash::token();
        $users = new Users();
        $users->update([
            "token" => $token
        ], [
            "username" => $username
        ]);

        return $this->render([
            "token" => $token
        ], 0);
    }

    function check($token){

    }
}