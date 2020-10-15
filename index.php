<?php
$sunny = rand(0,1);
$rainy = rand(0,1);

if ($sunny) {
    if($rainy){
        $h2 = "It's rainy with clouds";
        $weather_class = "weather--sun-rain";
    } else {
        $h2 = "It's sunny";
        $weather_class = "weather--sunny";
    }
} else {
    if(!$rainy){
        $h2 = "It's cloudy";
        $weather_class = "weather--cloudy";
    }else{
        $h2 = "It's rainy";
        $weather_class = "weather--rainy";
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
.weather{
    background-size: cover;
    width:50px;
    height:50px;
}
.weather--rainy{
    background-image: url(https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather07-512.png);
}
.weather--sunny{
    background-image: url(https://www.pinclipart.com/picdir/middle/5-51534_clipart-of-a-sun-sunny-icon-png-download.png);
}
.weather--sun-rain{
    background-image: url(https://toppng.com/uploads/preview/sun-behind-rain-cloud-icon-cloud-and-rain-transparent-ico-11562909339q8plfa1nfd.png);
}
.weather--cloudy{
    background-image: url(https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-cloudy-icon-png-image_450295.jpg);
}

</style>
<body>
    <div class="weather <?php print $weather_class; ?>"></div>
    <h2><?php print $h2; ?></h2>
</body>
</html>