<?php
$i = 5;

while ($i >= 1) {
    echo $i . "\n";
    $i--;
}

echo "Поехали!";


$coffee_cups = 0;

do{
    echo"Випил чашку кофе<br>";
    $coffee_cups++;
} while ($coffee_cups < 1);


for($i = 1; $i <= 10; $i++) {
    echo "5 * ". " = " . (5 * $i) . "<br>";
}


$prices = [100, 250, 500, 1000];

foreach ($prices as $price) {
    echo $price . " руб.<br>";
}


$i = 1;

while ($i <= 3) {
    echo "Число: $i \n";
    $i++;
}