<?php
$i = 5;

while ($i >= 1) {
    echo "$i ";
    $i--;
}

echo " Поехали! 
";
echo"
";



$coffee_cups = 0;

do{
    echo" Випил чашку кофе 
	";
    $coffee_cups++;
} while ($coffee_cups < 1);
echo"
";


for($i = 1; $i <= 10; $i++) {
    echo " 5 * $i". "= ". 5 * $i."
	";
}
echo"
";


$prices = [100, 250, 500, 1000];

foreach ($prices as $price) {
    echo $price . " руб. 
	";
}
echo"
";


$i = 1;

while ($i <= 3) {
    echo "Число: $i 
	";
    $i++;
}
