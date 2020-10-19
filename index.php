<?php
$condition = 4%2 == 0;

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
    /* justify-content: center;
    align-items: center; */
    /* height: 100vH; */
}
div{
    border: 1px solid black;
    height:30px;
    width:30px;
}
.black{
    background-color:black;
}
</style>
<body>
    <?php for($x = 1; $x <= 8; $x++):?>
    <div>
        <?php for($i = 1; $i <= 8; $i++):?>
        <?php if(($x + $i) % 2 == 0){ ?>
          <div class='black'></div>
          <?php } else { ?>
         <div></div>
         <?php } ?>
        <?php endfor;?>
    </div>
    <?php endfor;?>
   
</body>
</html>