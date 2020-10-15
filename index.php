<?php
    $name = 'Agne';
    $age = rand(15,35);
    $teistumas = rand(0,1);
    $kids = rand(1,5);

    if($teistumas){
        $teistumas_tekstas = 'teista';
    } else{
        $teistumas_tekstas = 'neteistas';
    }

    if ($age > 25 || $age < 18 || $teistumas || $kids > 2){
        $h2 = 'nėra šaukiamas į kariuomenę, nes ';
        if($age > 25){
            $h2 .= "per sena"; 
        } if($age < 18){
            $h2 .= "per jauna";
        } if($kids > 2){
            $h2 .= " turi {$kids} vaikus";
        } if($teistumas){
            $h2 .= " {$teistumas_tekstas}";
        }
    } else {
        $h2 = 'yra šaukiamas į kariuomenę'; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kariuomene</title>
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
        <li>Turi vaiku:<?php print $kids;?></li>
        <li>Teistumas:<?php print $teistumas_tekstas;?></li>
    </ul>
    <h2><?php print $name. ' '.$h2; ?></h2>
    
    
</body>
</html>