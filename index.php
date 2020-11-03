<?php
$width = 20;
$number = 0;

if (isset($_POST['submit'])) {
    $number = (int) $_POST['submit'];
    $number++;
    $width*=$number;      
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
<style>
form{
    display: flex;
    flex-direction: column;
}
button{
    width: 50px;
    padding: 10px;
}
</style>
</head>
<body>
    <main>
        <form method="post">
            <button name='submit' value='<?php print $number;?>'><?php print $number; ?></button>
            <img style='width: <?php print $width;?>px' src="https://www.thermofisher.com/blog/food/wp-content/uploads/sites/5/2015/08/single_strawberry__isolated_on_a_white_background.jpg" alt="berry">
        </form>
    </main>
</body>
</html>