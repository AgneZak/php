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

$data = App::$db->getRowsWhere('items');

foreach ($data as $id => $value){
    $link = new Link([
        'link' => "/admin/edit.php?id={$id}",
        'text' => 'Edit'
    ]);
    $data[$id]['link'] = $link->render();
}

$table = new Table([
    'headers' => [
        'Item',
        'Price',
        'Image url',
        'Description',
        'Options'
    ],
    'rows' => $data
]);

$page = new BasePage([
    'title' => 'Edit Items',
    'content' => $table->render()
]);

print $page->render();
?>

