<?php

use App\Controllers\HomeController;

require '../bootloader.php';

$controller = new HomeController();

print $controller->index();
