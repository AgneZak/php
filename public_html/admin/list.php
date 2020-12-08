<?php

use App\Controllers\Admin\ListController;

require '../../bootloader.php';

$controller = new ListController();

print $controller->editList();


