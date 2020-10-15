<?php
$sunny = rand(0,1);
$rainy = rand(0,1);
$weather = ' ';

if ($sunny) {
    if($rainy){
        $h2 = "It's rainy with clouds";
        $weather = "sun-rain";
    } else {
        $h2 = "It's sunny";
        $weather = "sunny";
    }
} else {
    if(!$rainy){
        $h2 = "It's cloudy";
        $weather = "cloudy";
    }else{
        $h2 = "It's rainy";
        $weather = "rainy";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Oras</title>
</head>
<style>
.rainy{
    background-image: url(https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather07-512.png);
    height:50px;
    width:50px;
    background-size: cover;
}
.sunny{
    background-image: url(https://www.pinclipart.com/picdir/middle/5-51534_clipart-of-a-sun-sunny-icon-png-download.png);
    height:50px;
    width:50px;
    background-size: cover;
}
.sun-rain{
    background-image: url(https://toppng.com/uploads/preview/sun-behind-rain-cloud-icon-cloud-and-rain-transparent-ico-11562909339q8plfa1nfd.png);
    height:50px;
    width:50px;
    background-size: cover;
}
.cloudy{
    background-image: url(https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-cloudy-icon-png-image_450295.jpg);
    height:50px;
    width:50px;
    background-size: cover;
}

</style>
<body>
    <div class="<?php print $weather; ?>"></div>
    <h2><?php print $h2; ?></h2>
</body>
</html>