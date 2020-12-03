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
//
//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

$form = new AddForm();


if ($form->validate()) {
    $clean_inputs = $form->values();

    App::$db->insertRow('items', $clean_inputs);

    $p = 'Sveikinu pridejus preke';
}

$content = new View([
    'title' => 'Add',
    'form' => $form->render(),
    'message' => $p ?? null
]);

$page = new BasePage([
    'title' => 'Add',
    'content' => $content->render( ROOT . '/app/templates/content/forms.tpl.php')
]);

print $page->render();
?>

