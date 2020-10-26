<?php
$serialas = [
    [
        'year' => 2020,
        'episodes' => rand (20,25),
        'duration' => rand (20,25)
    ],
    [
        'year' => 2019,
        'episodes' => rand (20,25),
        'duration' => rand (20,25)


    ],
    [
        'year' => 2018,
        'episodes' => rand (20,25),
        'duration' => rand (20,25)

    ]
];
$ziuriu_per_diena = 60;

$how_much_episodes = 0;
$how_long = 0;
foreach ($serialas as $key => $value) {
    $how_much_episodes += $value['episodes'];
    $how_long += $value['duration']*$value['episodes'];
}
$days_f = number_format($how_long / $ziuriu_per_diena, 2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Array</title>
</head>
<style>

</style>
<body>  
<section>
<p><?php print $how_much_episodes; ?> epizodu is viso</p>
<p><?php print $how_long; ?> minutes </p>
<p><?php print $days_f; ?> dienu</p>
</section>   
</body>
</html>