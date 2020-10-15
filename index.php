<?php
    $random_seconds = rand(0,100000);
    $hours = floor($random_seconds/3600);
    $minutes = floor(($random_seconds/60)%60);
    $seconds = $random_seconds%60;
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sekundziu skaiciuotuvas</title>
</head>
<style>
body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vH;
}

</style>
<body>
    
    <h2>Is viso sekundziu: <?php print $random_seconds; ?></h2>
    <h3><?php print $hours.'h'.$minutes.'m'.$seconds ; ?>s</h3>
    
    
</body>
</html>