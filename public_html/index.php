<?php

use App\App;
use App\Views\BasePage;
use Core\View;

require '../bootloader.php';

if (App::$session->getUser()) {
    $h3 = "Sveiki sugrize {$_SESSION['email']}";
} else {
    $h3 = 'Jus neprisijunges';
}

$content = new View([
    'title' => 'Welcome to BBZ SHOP',
    'heading' => $h3,
    'products' => App::$db->getRowsWhere('items')
]);

$page = new BasePage([
    'title' => 'Shop',
    'content' => $content->render(ROOT . '/app/templates/content/index.tpl.php')
]);

print $page->render();

?>
