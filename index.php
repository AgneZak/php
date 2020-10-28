<?php
$x = rand(1,100);
$y = rand(1,100);

function is_prime($number) {
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i <= $number/2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$answer = is_prime($x);
$answer_two = is_prime($y);

if ($answer) {
    $p_x = "$x is prime";
} else {
    $p_x = "$x is not prime";
}

if ($answer_two) {
    $p_y = "$y is prime";
} else {
    $p_y = "$y is not prime";
}

function sum_if_prime($x, $y) {
    if (is_prime($x) && is_prime($y)) {
        return $x + $y;
    }
}

$sum = sum_if_prime($x, $y);

if ($sum) {
    $p_sum ="The sum of prime is $sum";
} else {
    $p_sum ="The sum of prime is $sum";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Function</title>
</head>
<style>
    
</style>
<body> 
<main>
    <p><?php print $p_x; ?></p>
    <p><?php print $p_y; ?></p>
    <p><?php print $p_sum; ?></p>
</main>
</body>
</html>
