<?php
require '../bootloader.php';

$fileDB = new FileDB(DB_FILE);

$fileDB->createTable('users');
$fileDB->insertRow('users', ['email' => 'test@test.lt', 'password' => 'test']);

$fileDB->createTable('items');

$fileDB->save();
