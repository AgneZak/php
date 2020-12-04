<?php

use App\App;
use App\Views\BasePage;
use Core\Views\Link;
use Core\Views\Table;

require '../../bootloader.php';

if (!App::$session->getUser()) {
    header("Location: /login.php");
    exit();
}

$rows = App::$db->getRowsWhere('items');

foreach ($rows as $id => $row){
    $link = new Link([
        'link' => "/admin/edit.php?id={$id}",
        'text' => 'Edit'
    ]);

    $rows[$id]['link'] = $link->render();
}

$table = new Table([
    'headers' => [
        'Item',
        'Price',
        'Image url',
        'Description',
        'Options'
    ],
    'rows' => $rows
]);

$page = new BasePage([
    'title' => 'Edit List',
    'content' => $table->render()
]);

print $page->render();

