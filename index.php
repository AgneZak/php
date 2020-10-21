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
    flex-direction: column;
    justify-content: center; 
    align-items: center;   
}
div{
    width: 300px;
    height: 25px;
}
<?php for($i =1; $i <= 15; $i++):?>
    <?php print ".color-$i";?>{
        background-color: rgb(<?php print 255*($i/15);?>,0,0);
    }
<?php endfor; ?>
</style>
<body>
    <?php for($i =1; $i <= 15; $i++):?>
    <div class = "color-<?php print $i;?>"></div>
    <?php endfor; ?>
</body>
</html>