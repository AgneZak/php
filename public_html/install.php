<?php
require '../bootloader.php';


App::$db->createTable('users');
App::$db->insertRow('users', ['email' => 'test@test.lt', 'password' => 'test']);

App::$db->createTable('items');

