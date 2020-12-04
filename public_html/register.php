<?php
require '../bootloader.php';

use App\App;
use App\Views\BasePage;
use App\Views\Forms\RegisterForm;
use Core\View;

if (App::$session->getUser()) {
    header("Location: /index.php");
    exit();
}

$form = new RegisterForm();

if ($form->validate()) {
    $clean_inputs = $form->values();

    unset($clean_inputs['password_repeat']);

    App::$db->insertRow('users', $clean_inputs);

    header("Location: login.php");
}

$content = new View([
    'title' => 'Registruokis',
    'form' => $form->render()
]);

$page = new BasePage([
    'title' => 'Register',
    'content' => $content->render( ROOT . '/app/templates/content/forms.tpl.php')
]);

print $page->render();

?>