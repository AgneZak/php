<?php

use App\App;


/**
 *
 * Returns an array for navigation,
 * with name and links
 *
 * @return string[]
 */
function nav(): array
{
    $nav = ['/index.php' => 'Home'];

    if (App::$session->getUser()) {
        return $nav + [
            '/Admin/add.php' => 'Add',
            '/logout.php' => 'Logout',
        ];
    } else {
        return $nav + [
            '/register.php' => 'Register',
            '/login.php' => 'Login',
        ];
    }
}