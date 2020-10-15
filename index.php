<?php
    $name = 'Agne';
    $age = rand(15,35);
    $teistumas = rand(0,1);

    if($teistumas){
        $teistumas_tekstas = 'teistas';
    } else{
        $teistumas_tekstas = 'neteistas';
    }

    if($age < 25 && $age > 18 && $teistumas){
        $h2 = 'nėra šaukiamas į kariuomenę';
    } else {
        if(!$teistumas){
            $h2 = 'yra šaukiamas į kariuomenę'; 
        } else {
            $h2 = 'nėra šaukiamas į kariuomenę';
        }
    }

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

</style>
<body>
    <ul>
        <li><?php print $name;?></li>
        <li><?php print $age;?></li>
        <li>Teistumas:<?php print $teistumas_tekstas;?></li>
    </ul>
    <h2><?php print $name. ' '.$h2; ?></h2>
    
    
</body>
</html>