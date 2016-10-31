<?php
$car1 = [
    "name" => "bmw",
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015",
];

$car2 = [
    "name" => "toyota",
    "model" => "M10",
    "speed" => 110,
    "doors" => 4,
    "year" => "2014",
];

$car3 = [
    "name" => "opel",
    "model" => "T7",
    "speed" => 130,
    "doors" => 4,
    "year" => "2016",
];

$cars = [$car1, $car2, $car3];

foreach ($cars as $i => $value) {
    echo 'CAR '.$cars[$i]["name"]."\n";
    echo $cars[$i]["model"].' - '.$cars[$i]["speed"].' - '.$cars[$i]["doors"].' - '.$cars[$i]["year"]."\n";
}
?>
