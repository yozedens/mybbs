<?php

namespace app\home\controller;
use app\home\controller\Base;


class Login extends Base
{
    public function index()
    {
        return $this -> view -> fetch('login');
    }

    public function checkLogin()
    {
        return ["message"=>"app\home\controller\login\checklogin"];
    }
}