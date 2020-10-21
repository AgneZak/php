<?php
$months = 24;
$car_price_new = 30000;
$depreciation = 2;
$car_price_used = 30000;

for ($i = 0; $i < $months; $i++) { 
    $car_price_used *= (100 - $depreciation)/100;  
}

$car_price_used_f = number_format($car_price_used, 2);
$depr_perc = number_format((1 - $car_price_used/$car_price_new)*100, 2);

$h2 = "Naujos masinos kaina: $car_price_new";
$h3 = "Po $months men., masinos verte bus: $car_price_used_f eur.";
$h4 = "Masina nuvertes $depr_perc prc.";
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

</style>
<body>
    <h1>Kiek nuvertes masina?</h1>
    <h2><?php print $h2;?></h2>
    <h3><?php print $h3;?></h3>
    <h4><?php print $h4;?></h4>
</body>
</html>