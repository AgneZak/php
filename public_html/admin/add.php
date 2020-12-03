<?php

use App\App;
use App\Views\Forms\Admin\AddForm;
use App\Views\Navigation;

require '../../bootloader.php';

if (!App::$session->getUser()) {
    header("Location: /login.php");
    exit();
}
//
//var_dump(App::$tracker->getTrackingData());
//var_dump(App::$tracker->save());

$nav = new Navigation();

$form = new AddForm();


if ($form->validate()) {
    $clean_inputs = $form->values();

    App::$db->insertRow('items', $clean_inputs);

    $p = 'Sveikinu pridejus preke';
} else {
    $p = 'Uzpildyki visus laukus';
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
    <title>Add</title>
</head>
<body>
<main>

    <?php print $nav->render(); ?>

    <article class="wrapper">
        <h1 class="header header--main">Prideki preke</h1>

        <?php print $form->render(); ?>

        <?php if (isset ($p)): ?>
            <p><?php print $p; ?></p>
        <?php endif; ?>

    </article>
</main>
</body>
</html>

