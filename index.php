<?php
$products = [
    [
        'name' => 'Stumbro degtinele',
        'price' => 6.49,
        'image' => 'https://iki.lt/wp-content/uploads/alk/247119.jpg',
        'amount' => rand(0,1)
    ],
    [
        'name' => 'Balzamas',
        'price' => 9.5,
        'price_special' => 7.99,
        'image' => 'https://iki.lt/wp-content/uploads/alk/244784.jpg',
        'amount' => rand(0,1)

    ],
    [
        'name' => 'Tekila',
        'price' => 15.99,
        'image' => 'https://iki.lt/wp-content/uploads/alk/11496.jpg',
        'amount' => rand(0,1)

    ],
    [
        'name' => 'Pivo alus',
        'price' => 4.99,
        'price_special' => 2.99,
        'image' => 'https://www.vynoguru.lt/media/catalog/product/a/l/alus_corona_extra.jpg',
        'amount' => rand(0,1)
    ]
];

foreach ($products as $key => $bottle) {
    if(array_key_exists('price_special', $bottle)) {
        $products[$key]['percent'] = number_format(($bottle['price']-$bottle['price_special'])*100/$bottle['price'],2);
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Array</title>
</head>
<style>
img{
    width: 40px;
    height:140px;
}
main{
    text-align: center;
}
main > div{
    display:flex;
}
div > div {
    width: 200px;
    text-align:center;
    margin: 10px;
    border: 1px solid grey;
}
section{
    display: flex;
    justify-content:flex-end;
}
.price,
.red{
    border: 1px solid grey;
    padding: 10px;
    color: white;
}
.red{
    background-color: red;
}
.price{
    background-color: black;
    margin-left: 40px;
}
.stock{
    color: green;
}
.no-stock{
    color: red;
}
.grayscale{
    filter: grayscale(100%);

}
</style>
<body> 
<main>
    <h1>Drink catalogue</h1>
    <div>
        <?php foreach ($products as $key => $drink): ?>
            <div>
                <section> 
                    <?php if (isset($drink['price_special'])): ?>
                        <p class='red'><?php print '- '. $drink['percent'] . '%'; ?></p>
                        <p class = 'price'><?php print $drink['price_special']. ' Eur'; ?></p>
                    <?php else: ?>
                        <p class = 'price'><?php print $drink['price']. ' Eur'; ?></p>
                    <?php endif; ?>
                </section>
                <img class = '<?php print $drink['amount'] > 0 ? '' : 'grayscale'; ?>' src="<?php print $drink['image'];?>" alt="">
                <h2><?php print $drink['name']; ?></h2>
                <p class = '<?php print $drink['amount'] > 0 ? 'stock' : 'no-stock'; ?>'><?php print $drink['amount'] > 0 ? 'Yra sandelyje':'Nera sandelyje'; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>