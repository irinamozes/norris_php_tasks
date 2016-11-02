<?php
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015",
];

$toyota = [
    "model" => "M10",
    "speed" => 110,
    "doors" => 4,
    "year" => "2014",
];

$opel = [
    "model" => "T7",
    "speed" => 130,
    "doors" => 4,
    "year" => "2016",
];

$cars = [
   "bmw" => $bmw,
   "toyota" => $toyota,
   "opel" => $opel
];


foreach ($cars as $i => $value) {
    echo "CAR $i\n";
    echo $value["model"].' - '.$value["speed"].' - '.$value["doors"].' - '.$value["year"]."<br>";
}
?>
