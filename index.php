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

    foreach ($matrix as $key => $row) {
        $sum = 0;
        
        foreach ($row as $row_key => $value) {
            $sum += $value;            
        }
        
        if($sum === count($matrix)){
            print "$key";
        } elseif($sum === 0){
            print "$key";
        }
    }
}
get_winning_rows($array)


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
</style>
<body> 
<main>
    <?php foreach ($array as $key => $row): ?>
        <div class='row'>
            <?php foreach ($row as $key => $cube): ?>
                <div class = '<?php print $cube ? 'blue': 'yellow';?>'></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</main>
</body>
</html>
