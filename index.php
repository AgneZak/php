<?php
$matrixOne = [
    [
        [1,2,3],
        [3,2,1],
        [1,1,1]
    ],
    [
        [2,2,1],
        [3,2,3],
        [1,1,3]
    ]
];
$matrix = [
    [0,0,0],
    [0,0,0],
    [0,0,0]
];
foreach ($matrixOne as $key => $array) {
    foreach ($array as $row_key => $row) {
        foreach ($row as $column_key => $value) {
            $matrix[$row_key][$column_key] +=  $value;
        }
    };
};
var_dump($matrix)
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