<?php
    $minutes = abs(date('i')-59);
    $minutes_remain = $minutes % 5;

    $seconds = abs(date('s')-59);    
    $percents = $minutes_remain.$seconds / 60 * 100;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Joint'o Load</title>
</head>
<style>
body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vH;
}
.joint-smoked{
    background-image: url(https://banner2.cleanpng.com/20190807/hoc/kisspng-drawing-joint-blunt-cannabis-design-5d4a4f196c73d6.5354688115651510014442.jpg);
    background-size: cover;
    width:<?php print $percents; ?>px;
    height:400px;
    display: flex;
    justify-content: center;
    position: absolute;
    left:0;
    
}
.joint{
    position:relative;
    background-image: url(https://w7.pngwing.com/pngs/140/121/png-transparent-joint-medical-cannabis-blunt-deal-with-it-angle-fashion-auto-part-thumbnail.png);
    background-size: cover;
    width:400px;
    height:400px;
    display: flex;
    justify-content: center;
}

</style>
<body>
    <div class="joint">
        <div class='joint-smoked'></div>
    </div>
    
    <p>Liko <?php print $minutes_remain . ':' .$seconds; ?> </p>
    
</body>
</html>