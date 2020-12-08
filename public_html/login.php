<?php

use App\Controllers\LoginController;

require '../bootloader.php';

//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

$controller = new LoginController();

print $controller->login();