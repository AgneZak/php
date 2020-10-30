<?php
/**
 * @return array
 * Sukuriamas ,,card_deck'' masyvas is ,,card'' ir ,,type''
 */
function deck() {
    $cards = ['A', 'K', 'Q', 'J', 10, 9, 8, 7, 6, 5, 4, 3, 2];
    $type = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
    $card_deck = [];
    foreach ($cards as $keys => $card) {
        foreach ($type as $key => $kind) {
            $card_deck[] = [
                'type' => $kind,
                'card' => $card
            ];
        }
    }
    return $card_deck;
}
$card_deck = deck();
/**
 * @param $deck
 * @return array
 * paduodamas naujai sugeneruotas visu kortu masyvas ,,card_deck'' kad random atvaizuotu 5 is ju
 */
function draw_card(array $deck): array
{
    $five_cards = [];
    for ($i = 1; $i <= 5; $i++) {
        $card_name = rand(0, count($deck) - 1);
        $five_cards[] = $deck[$card_name];
        array_splice($deck, $card_name, 1);
    }
    return $five_cards;
}
$cards_on_table = draw_card($card_deck);
/**
 *paduodam sugeruotas 5 kortas i funkcija kad patikrintu ar visos vienodos rusies
 */
function is_flush($cards_on_table){       
    $check = 0;
    for ($i=0; $i < count($cards_on_table); $i++) { 
        if ($cards_on_table[$i]['type'] === $cards_on_table[0]['type']) {
            $check += 1;
        } 
    }
    if ($check === count($cards_on_table)) {
        return 'Yes';
    } else return 'NO';  
}
$answer = 'Do i have flush? : ' . is_flush($cards_on_table);
/** 
*paduodam sugeruotas 5 kortas i funkcija kad patikrintu kiek yra vienodu kortu (nebutina kad rusis sutaptu)
*/
function same_card($cards_on_table){
    $same = [];
    for ($i=0; $i < 5; $i++) {
        if (isset($same[$cards_on_table[$i]['card']])) {
            $same[$cards_on_table[$i]['card']]++; 
        } else {
            $same[$cards_on_table[$i]['card']] = 1;
        }

    }
    return $same;
}

/** 
*paduodam sugeruota vienodu kortu array i funkcija kad patikrintu ar turime pora
*/

$same = same_card($cards_on_table);

function card_pair($array){
    foreach ($array as $key => $value) {
        if($value === 2) {
            return 'YES';
        } else return 'NO';
    }
}
$pair_answer = 'Do i have pair? :' . card_pair($same);

function two_card_pairs($array){
    foreach ($array as $key => $value) {
        $pair_sum = 0;
        if($value === 2) {
            $pair_sum++;
        }
        if($pair_sum >= 2) {
            return 'YES';
        } else return 'NO';
    }
}
$pairs_answer = 'Do i have two pairs? :' . two_card_pairs($same);


function three_of_the_kind($array){
    foreach ($array as $key => $value) {
        if($value === 3) {
            return 'YES';
        } else return 'NO';
    }
}
$three_answer = 'Do i have 3 of the kind? :' . three_of_the_kind($same);


function four_of_the_kind($array){
    foreach ($array as $key => $value) {
        if($value === 4) {
            return 'YES';
        } else return 'NO';
    }
}
$four_answer = 'Do i have 4 of the kind? :' . four_of_the_kind($same);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
<style>
body {
    text-align: center;
}
section {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 10px;
    justify-items: center;
}

.card-number {
    position: absolute;
    top: 0;
    left: 15%;
    color: black;
    font-size: 45px;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 400px;
    width: 200px;
    border: 1px solid black;
    border-radius: 10px;
    font-size: 30px;
    color: white;
    background-color: azure;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}
.Clubs {
    background-image: url("https://cdn.pixabay.com/photo/2012/04/13/20/38/clubs-33561_640.png");
}
.Diamonds {
    background-image: url("https://upload.wikimedia.org/wikipedia/en/thumb/1/1f/Card_diamond.svg/1200px-Card_diamond.svg.png");
}
.Hearts {
    background-image: url("https://cdn.pixabay.com/photo/2012/04/13/20/38/hearts-33564_1280.png");
}
.Spades {
    background-image: url("https://svgsilh.com/png-1024/145116.png");
}
</style>
</head>
<body>
<section>
    <?php foreach ($cards_on_table as $on_table): ?>
        <div class="card <?php print $on_table['type'] ?>"><?php print $on_table['type'] ?>
            <h2 class = 'card-number'><?php print $on_table['card'] ?></h2>
        </div>
    <?php endforeach; ?>
</section>
<h3> <?php print $answer; ?></h3>
<h2> <?php print $pair_answer; ?></h2>
<h2> <?php print $pairs_answer; ?></h2>
<h2> <?php print $three_answer; ?></h2>
<h2> <?php print $four_answer; ?></h2>


</body>
</html>