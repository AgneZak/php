<?php

use App\App;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use Core\View;

require '../../bootloader.php';

if (!App::$session->getUser()) {
    header("Location: /login.php");
    exit();
}

$form = new AddForm();
$row_id = $_GET['id'];

$form->fill(App::$db->getRowById('items', $row_id));

if ($form->validate()) {
    $clean_inputs = $form->values();

    App::$db->updateRow('items', $row_id, $clean_inputs);

    $p = 'Sveikinu uzkeitus preke';
}

$content = new View([
    'title' => 'Edit item',
    'form' => $form->render(),
    'message' => $p ?? null
]);

$page = new BasePage([
    'title' => 'Add',
    'content' => $content->render(ROOT . '/app/templates/content/forms.tpl.php')
]);

print $page->render();
?>

