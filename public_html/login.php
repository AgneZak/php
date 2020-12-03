<?php
require '../bootloader.php';

use App\App;
use App\Views\Forms\LoginForm;
use App\Views\Navigation;

//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

$nav = new Navigation();

$form = new LoginForm();


if ($form->validate()) {
    $p = 'Sveikinu prisijungus';

    $clean_inputs = $form->values();

    App::$session->login($clean_inputs['email'], $clean_inputs['password']);

    if (App::$session->getUser()) {
        header("Location: Admin/add.php");
        exit();
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/media/style.css">
    <title>Login</title>
</head>
<body>
<main>

    <?php print $nav->render(); ?>

    <article class="wrapper">
        <h1 class="header header--main">Prisijunki</h1>

        <?php print $form->render(); ?>

        <?php if (isset ($p)): ?>
            <p><?php print $p; ?></p>
        <?php endif; ?>

    </article>
</main>
</body>
</html>
