<?php
$str_karl = 'Карл у Клары украл Кораллы';
$str = str_replace("К", "", $str_karl);
echo $str . "<br>";

$str_two = 'Две бутылки лимонада';
$str_three = str_replace("Две", "Три", $str_two);
echo $str_three . "<br>";
?>
