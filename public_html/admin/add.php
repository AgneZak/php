<?php

use App\Controllers\Admin\AddController;

require '../../bootloader.php';

//
//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

$controller = new AddController();

print $controller->add();

