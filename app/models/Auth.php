<?php

namespace models;


use DateInterval;
use DateTime;
use models\tables\Users;

class Auth
{
    private function __construct()
    {
    }

    static function login($username, $password)
    {
        if (!$username || !$password) return false;
        $users = new Users();
        if (!$users->has(["username" => $username])) return false;
        $user = $users->get("*", ["username" => $username]);
        if (!Password::verify($password, $user["password"])) return false;
        $hash = Hash::generate();

        $date = new DateTime();
        $interval = new DateInterval("P1Y");
        $date->add($interval);

        Cookies::set("auth", $hash, $date->getTimestamp());
        $users->update([
            "hash" => $hash
        ], [
            "username" => $username
        ]);
        return $users->has(["hash" => $hash]);
    }

    static function logout()
    {
        $users = new Users();
        if (!Cookies::get("auth")) return;
        $users->update([
            "hash" => null
        ], [
            "hash" => Cookies::get("auth")
        ]);
        Cookies::set("auth", null, -1);
    }
}