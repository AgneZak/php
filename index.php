<?php
$cars=[
    [
        'brand' => 'BMW',
        'model' => 'X3',
        'image' => 'https://www.bmw.lt/content/bmw/marketLT/bmw_lt/lt_LT/all-models/x-series/X3/2019/bmw-x3-ikvepia/jcr:content/par/highlight_7770/highlightitems/highlightitem_45f3/image/mobile.transform/highlight/image.1551097644290.jpg',
        'year' => 2015,
        'price' => rand(100000,500000),
        'on_sale' => rand(0,1) ? true : false
    ],
    [
        'brand' => 'BMW',
        'model' => 'i3',
        'image' => 'https://www.motortrend.com/uploads/sites/5/2017/12/2018-BMW-i3s-front-three-quarter-06-1.jpg',
        'year' => 2015,
        'price' => rand(100000,500000),
        'on_sale' => rand(0,1) ? true : false
    ],
    [
        'brand' => 'BMW',
        'model' => '520d',
        'image' => 'https://cdn.fleetnews.co.uk/web/1/cars/11332.jpg',
        'year' => 2015,
        'price' => rand(100000,500000),
        'on_sale' => rand(0,1) ? true : false
    ],
    [
        'brand' => 'Audi',
        'model' => 'A6',
        'image' => 'https://jp.lt/wp-content/uploads/2018/06/Audi_A6_2.jpg',
        'year' => 2015,
        'price' => rand(100000,500000),
        'on_sale' => rand(0,1) ? true : false
    ],
    [
        'brand' => 'Audi',
        'model' => 'A8',
        'image' => 'https://s1.15min.lt/static/cache/OTI1eDYxMCw4MDB4NjQ0LDYyMzI3NCxvcmlnaW5hbCwsaWQ9MzM5Nzk0NiZkYXRlPTIwMTclMkYxMCUyRjA2LDMxNjg4MTg3ODQ=/audi-a8-59d73d6cd8bc8.jpg',
        'year' => 2015,
        'price' => rand(100000,500000),
        'on_sale' => rand(0,1) ? true : false
    ],
    [
        'brand' => 'Audi',
        'model' => 'RS6',
        'image' => 'https://autoplius-img.dgn.lt/nak_12_40813/audi-rs6.jpg',
        'year' => 2015,
        'price' => rand(100000,500000),
        'on_sale' => rand(0,1) ? true : false
    ],
];

shuffle($cars);

$rand_brand = rand(0,1);
$car_by_brand = [];
$car_brand_audi = 'Audi';
$car_brand_bmw = 'BMW';

if($rand_brand){
    foreach ($cars as $key => $car) {
        if($car_brand_audi === $car['brand']) {
            $car_by_brand[] = $car;
        };
    }
} else {
    foreach ($cars as $key => $car) {
        if($car_brand_bmw === $car['brand']) {
            $car_by_brand[] = $car;
        };
    }
};

$minimal_price = 222222;
$car_by_price = [];
foreach ($cars as $car){
    if($minimal_price <= $car['price']){
        $car_by_price[] = $car;
    };
};

$max_price = 333333;
$car_by_max_price = [];
foreach ($cars as $car){
    if($max_price >= $car['price']){
        $car_by_max_price[] = $car;
    };
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Array</title>
</head>
<style>
body{
    margin: 0 auto;
    height: 100vH;
}
header,
footer{
    background-color: grey;
    text-align: center;
    padding: 5px;
    margin: 0 auto;
}
main{
    height: 100vh;
}
img{
    height: 150px;
    width: 200px;
    object-fit: cover;
}
section{
    display: flex;
    flex-wrap: wrap;
    width: 700px;
    margin: 0 auto;
    justify-content: center;
}
.price{
    border: 1px solid grey;
    cursor: pointer;
    padding: 10px;
}
.car-card{
    margin: 10px;
    border: 1px solid grey;
    text-align: center;
}
</style>
<body> 
    <header>
        <h1>Our newest cars!</h1>
    </header>
    <main>
        <section>
            <?php foreach ($car_by_max_price as $key => $car): ?>
                <div class = 'car-card'>
                    <div><img src="<?php print $car['image']; ?>" alt="car-photo"></div>
                    <div>
                        <p><?php print $car['brand'] . ' ' .$car['model']; ?></p>
                        <p><?php print 'Year: ' . $car['year']; ?></p>
                        <div class = 'price' style = 'background-color:<?php print $car['on_sale'] ? 'red' : 'green'; ?>'><?php print $car['on_sale'] ? 'SOLD OUT' : $car['price'] . ' Eur'; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>   
    <footer>
    <p>C 2010</p>
    </footer>
</body>
</html>