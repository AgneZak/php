<?php
$days = 365;

$pack_price = 3.5;

for($i = 1; $i <= $days; $i++){
    $day_of_week = (int) date('N', strtotime("+$i days"));

    if ($day_of_week <= 5) {
        $cigs_mon_fri = rand(3,4);
        $count_ttl += $cigs_mon_fri;
        $mon_fri_ttl += $cigs_mon_fri;
    } elseif ($day_of_week == 6) {
        $cigs_sat = rand(10,20);
        $count_ttl += $cigs_sat;
    } else {
        $cigs_sun = rand(1,3);
        $count_ttl += $cigs_sun;
    }
}
$price_ttl = ceil($count_ttl/20)*$pack_price;
$total_mon_fri = ceil($mon_fri_ttl/20)*$pack_price;

$h2 = "Per $days dienas, surukyta $count_ttl cigareciu uz $price_ttl eur";
$h3 = "Nerukydamas darbo dienomis, sutaupyciau $total_mon_fri eur";

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
    <h1>Mano dumu skaiciuokle</h1>
    <h2><?php print $h2;?></h2>
    <h3><?php print $h3;?></h3>
   
</body>
</html>