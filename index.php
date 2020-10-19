<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ciklas</title>
</head>
<style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vH; */
}
div{
    margin:10px;
    border: 1px solid black;
    padding: 10px;
}
</style>
<body>
    <?php for($x = 1; $x <= 9; $x++):?>
    <div>
        <?php for($i = 1; $i <= 9; $i++):?>
       <p><?php print $x .'x'.$i."=".$math=$i*$x;?></p>
        <?php endfor;?>
    </div>
    <?php endfor;?>
</body>
</html>