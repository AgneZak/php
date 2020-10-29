<?php
function generate_matrix($size) {
    $array = [];
    for ($i = 0; $i < $size; $i++) { 
        for ($a=0; $a < $size; $a++) { 
            $array[$i][$a] = rand(0,1);
        }
    }
    
    return $array;
}

$array = generate_matrix(rand(2,3));

function get_winning_rows($matrix) {
    $winning_rows = [];

    foreach ($matrix as $key => $row) {
        $sum = 0;
        
        foreach ($row as $row_key => $value) {
            $sum += $value;            
        }

        if($sum === count($matrix)){
            $winning_rows[] = $key;
        } elseif($sum === 0){
            $winning_rows[] = $key;
        }
    }

    return $winning_rows;
}
$win_array = get_winning_rows($array);



var_dump($array);
var_dump($win_array);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Function</title>
</head>
<style>
.row{
    display:flex;
}
.yellow{
    background-color: gold;
    width: 50px;
    height:50px;
    margin: 4px;
}
.blue{
    background-color:darkcyan;
    width: 50px;
    height:50px;
    margin: 4px;
}
.win{
    border: 1px solid red;
}
</style>
<body> 
<main>
    <?php foreach ($array as $key => $row): ?>
        <div class='row <?php print in_array($key, $win_array) ? 'win' : ''; ?>'>
            <?php foreach ($row as $row_key => $cube): ?>
                <div class = '<?php print $cube ? 'blue': 'yellow'; ?>'></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</main>
</body>
</html>
