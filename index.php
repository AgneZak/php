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
<style>
body {
    background: rgb(<?php print rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255);?>);
}
h1{
    font-size: <?php print rand(10,100);?>px;
}
p{
    color: rgb(<?php print rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255);?>);
}
</style>
<body>
<img src="dice_<?php print rand(1,6);?>.png" alt="[ Random Image ]" height="100" width="100" />

</body>
</html>