<?php
    date_default_timezone_set('Europe/Vilnius');
    $hours = date('h')*30;
    $minutes = date('i')*6;
    $seconds = date('s')*6;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Clock</title>
</head>
<style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vH;
}
.clock{
    background-image: url(https://lh3.googleusercontent.com/proxy/qIJqnxKSIZGeQfnhPokRMHI0kYJ-blISVvBkXp-VlwW_Uj3bfsWs1OPF3rWX59Hy7diyHlaLQpvG5Hr4rc5qjSanuYzCqD7aktJk-9MxCRgW7Zs54oQ_kUX3mdIPMUF8dUmfmgoWQWyDlcOKBOU);
    background-size: cover;
    width:400px;
    height:400px;
    display: flex;
    justify-content: center;
    align-items: baseline;
}
.hours{
    background-color: black;
    height:180px;
    width:10px;
    transform: rotate(<?php print $hours;?>deg);
    transform-origin: left center;
    border-radius:20%;
}
.minutes{
    background-color: red;
    height:150px;
    width:5px;
    transform: rotate(<?php print $minutes;?>deg);
    transform-origin: 10% 100%;
    border-radius:20%;
}
.seconds{
    background-color: blue;
    height:200px;
    width:5px;
    transform: rotate(<?php print $seconds;?>deg);
    transform-origin: 10% 100%;
    border-radius:20%;
}
</style>
<body>
    <div class="clock">
        <div class='hours'></div>
        <div class='minutes'></div>
        <div class='seconds'></div>
    </div>
    
</body>
</html>