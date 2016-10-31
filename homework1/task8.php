<?php
$str = 'да полевеет правая нога';
echo $str."\n";
$arr_str = explode(" ", $str);
print_r($arr_str);

$cou = count($arr_str) - 1;

$i = 0;
while ($i <= $cou) {
    $arr[$i] = $arr_str[$cou - $i];
    $i++;
}

$str = implode("&", $arr);
echo $str;
