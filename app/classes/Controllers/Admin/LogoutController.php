<?php


namespace App\Controllers\Admin;


use App\App;

class LogoutController
{
    public function logout()
    {
        App::$session->logout('/login');
    }

}