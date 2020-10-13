<?php date_default_timezone_set('Europe/Vilnius'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>
        PHP lydės ir
        <?php print date('Y-m-d', strtotime('+' . rand(0, 3650) . ' days')); ?>
    </title>
</head>
<body>
<h1>
    <strong>Agnė</strong> - Galbūt turėsiu
    <?php print rand(1, 5); ?> vaikų(us)!
</h1>
<p>
    D. Trump'as nebebus prezidentu:<br>
    <?php print date('Y-m-d', strtotime('+' . rand(2, 10) . 'year')); ?>
</p>
</body>
</html>