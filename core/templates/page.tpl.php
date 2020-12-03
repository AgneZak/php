<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php foreach ($data['css'] as $path): ?>

    <link rel="stylesheet" href="<?php print $path; ?>">

    <?php endforeach; ?>

    <title><?php print $data['title'];?> </title>
</head>
<body>
<header>
    <?php print $data['header']; ?>
</header>
<main>
    <article class="wrapper">

        <?php print $data['content']; ?>

    </article>
</main>
</body>
</html>
