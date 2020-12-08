<?php

use App\Controllers\Admin\EditController;

require '../../bootloader.php';

$controller = new EditController();

print $controller->edit();

