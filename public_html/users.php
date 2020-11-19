<?php
require '../bootloader.php';

$table = [
    'headers' => [
        'Username',
        'Password'
    ],
    'rows' => file_to_array(DB_FILE)
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require ROOT . '/core/templates/table.tpl.php'; ?>
</body>
</html>
