<!doctype html>
<?php date_default_timezone_set('Europe/Vilnius') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php print 'PHP lydes ir  ' . date('Y.m.d', strtotime('+' . rand(1, 15) . 'year')) . ' !'; ?>;</title>
    <style>
        .bomb {
            background-size: contain;
            background-repeat: no-repeat;
            background-image: url("https://static01.nyt.com/images/2020/03/08/magazine/08Mag-Tip-01/08Mag-Tip-01-videoSixteenByNineJumbo1600.jpg");
        }
        .bomb-container {
            width: <?php print date('s')*10?>px;
            height: <?php print date('s')*10?>px;
        }



    </style>
</head>
<body>
    <div class="bomb bomb-container">
        <div> <?php switch (date ('s')){
                case '59': print '<img src="https://www.pitara.com/media/nuclear-bomb-conventional-bomb-2.jpg" alt="" />';
            }?>
        </div>
    </div>
    <p><?php print date("s") ?></p>
</body>
</html