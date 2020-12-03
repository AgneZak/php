<?php

use App\App;

require '../bootloader.php';

//var_dump(App::$tracker->usersTrack());

App::$session->logout('/login.php');