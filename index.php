<?php

$police_report =[
    [
        'subject' => 'Domantas',
        'reason' => 'Public Uranation',
        'amount' => rand(-100, 250)
    ],
    [
        'subject' => 'Dainius',
        'reason' => 'Drunk in public',
        'amount' => rand(-100, 250)
    ],
    [
        'subject' => 'Andrius',
        'reason' => 'Speeding',
        'amount' => rand(-100, 250)
    ]
];

foreach ($police_report as $key => $report) {
    $warning = rand(0, 1);
    $police_report[$key]['warning_only'] = $warning ? true : false;

    if($report['amount'] <= 0) {
        $police_report[$key]['css_class'] = 'income';
    } else {
        $police_report[$key]['css_class'] = 'expense';
    };
}
var_dump($police_report);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Array</title>
</head>
<style>
.income{
    color: green;
}
.expense{
    color:red;
}

</style>
<body>  
<section>
    <h1>Policijos israsas</h1>
    <ul>
        <?php foreach($police_report as $report): ?>
            <li class = '<?php print $report['css_class'];?>'>
                <?php print $report['subject']. ' (' . $report['reason'] . ') -';?>
                <?php print $report['warning_only'] ? 'Ispejimas' : $report['amount'];?>
            </li>
        <?php endforeach; ?>   
    </ul>
</section>   
</body>
</html>