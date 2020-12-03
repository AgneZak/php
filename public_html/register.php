<?php
require '../bootloader.php';

use App\App;
use App\Views\Forms\RegisterForm;
use App\Views\Navigation;

//
//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

$nav = new Navigation();

$form = new RegisterForm();


if ($form->validate()) {
    $clean_inputs = $form->values();

    unset($clean_inputs['password_repeat']);

    App::$db->insertRow('users', $clean_inputs);

    $p = 'Sveikinu uzsireginus';

    header("Location: login.php");
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
    <title>Register</title>
</head>
<body>
<main>

    <?php print $nav->render(); ?>

    <article class="wrapper">
        <h1 class="header header--main">Reginkis</h1>

        <?php print $form->render(); ?>

        <?php if (isset ($p)): ?>
            <p><?php print $p; ?></p>
        <?php endif; ?>

    </article>
</main>
</body>
</html>