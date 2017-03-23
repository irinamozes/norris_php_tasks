<?php
$num = [];
for ($i = 0 ; $i <= 53; $i++) {
    $num [] = rand(1, 100);
}
$my_csv = fopen('num.csv', 'w+');
fputcsv($my_csv, $num);
fclose($my_csv);
$my_csv = fopen('num.csv', 'r');
$csv = fgetcsv($my_csv);
$sum = 0;
foreach ($csv as $item) {
    if (($item % 2) == 0) {
        $sum = $sum + $item;
    }
}
echo $sum;
