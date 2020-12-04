<?php
require '../bootloader.php';

use App\App;
use App\Views\BasePage;
use App\Views\Forms\LoginForm;
use Core\View;

//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

if (App::$session->getUser()) {
    header("Location: /index.php");
    exit();
}

$form = new LoginForm();

if ($form->validate()) {
    $clean_inputs = $form->values();

    App::$session->login($clean_inputs['email'], $clean_inputs['password']);

    if (App::$session->getUser()) {
        header("Location: Admin/add.php");
        exit();
    }
}

$content = new View([
    'title' => 'Prisijunki',
    'form' => $form->render()
]);

$page = new BasePage([
    'title' => 'Login',
    'content' => $content->render( ROOT . '/app/templates/content/forms.tpl.php')
]);

print $page->render();


?>
