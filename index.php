<?php
$cube = [
    [0,1,1],
    [1,0,1],
    [0,1,0]
];
$new_cube = [];
foreach ($cube as $cube_key => $number) {
    foreach ($number as $number_key => $value) {
        if($value === 0) {
            $new_cube[$cube_key][$number_key] = 1;
        } else {
            $new_cube[$cube_key][$number_key] = 0;
        };
    }
}
var_dump($new_cube)
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
</main>
</body>
</html>