<?php

use App\Controllers\RegisterController;

require '../bootloader.php';

$controller = new RegisterController();

print $controller->register();