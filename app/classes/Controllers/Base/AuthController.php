<?php


namespace App\Controllers\Base;


use App\App;

class AuthController
{
    protected string $redirect = '/login.php';

    public function __construct()
    {
        if (!App::$session->getUser()) {
            header("Location: $this->redirect");
            exit();
        }
    }
}