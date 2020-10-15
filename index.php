<?php
    $years = rand(1991,2020);

    if($years % 4 == 0 && ($years % 100 != 0 || $years % 400 == 0)){
        $h2 = "{$years} is leap year";
    } else{
        $h2 = "{$years} is not leap year";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leap Year</title>
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
    
    <h2><?php print $h2; ?></h2>
    
    
</body>
</html>