<?php

use App\App;
use App\Views\Navigation;
use Core\Views\Page;

require '../bootloader.php';

$nav = new Navigation();

if (App::$session->getUser()) {
    $h3 = "Sveiki sugrize {$_SESSION['email']}";
} else {
    $h3 = 'Jus neprisijunges';
}
$content = new \Core\View([
    'title' => 'Welcome to BBZ SHOP',
    'heading' => $h3,
    'products' => App::$db->getRowsWhere('items')
]);

$page = new Page([
    'title' => 'Shop',
    'css' => [
        '/media/style.css'
    ],
    'header' => $nav->render(),
    'content' => $content->render(ROOT . '/app/templates/content/index.tpl.php')
]);

print $page->render();

?>
