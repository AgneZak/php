<?php
require '../bootloader.php';

$nav = nav();

if (is_logged_in()) {
    $h3 = "Sveiki sugrize {$_SESSION['email']}";
} else {
    $h3 = 'Jus neprisijunges';
}

$fileDB = new FileDB(DB_FILE);
$fileDB->load();
$products = $fileDB->getRowsWhere('items');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/media/style.css">
    <title>Shop</title>
</head>
<body>
<main>

    <?php require ROOT . '/app/templates/nav.tpl.php'; ?>

    <article class="wrapper">
        <h1 class="header header--main">Welcome to BBZ SHOP</h1>
        <h3 class="header"><?php print $h3; ?></h3>
        <section class="grid-container">

            <?php foreach ($products as $product) : ?>

                <div class="grid-item">
                    <h4><?php print $product['name']; ?></h4>
                    <img class="product-img" src="<?php print $product['img']; ?>" alt="">
                    <p><?php print $product['descr']; ?></p>
                    <p>Is it vegan: <?php print $product['vegan']; ?></p>
                    <p><?php print $product['price']; ?> $</p>
                </div>

            <?php endforeach; ?>

        </section>
    </article>
</main>
</body>
</html>