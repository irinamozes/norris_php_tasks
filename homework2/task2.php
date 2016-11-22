<?php
$arr_number = array(1, 2, 3, 4, 5);
$arith_exp = '/';

function array_print($arr, $str_operation)
{

    foreach ($arr as $value) {
        if (is_float($value) or is_int($value)) {

        } else {
            echo "Элемент $value  не является числом. Некорректный ввод даных массива<br>";

            return;
        }
    }

    $len = count($arr);
    $total = $arr[0];

    switch ($str_operation) {
        case '+':
            for ($i = 1; $i < $len; $i++) {
                $total = $total + $arr[$i];
            }
            echo $total;
            break;


        case '-':
            for ($i = 1; $i < $len; $i++) {
                $total = $total - $arr[$i];
            }
            echo $total;
            break;

        case '*':
            for ($i = 1; $i < $len; $i++) {
                $total = $total * $arr[$i];
            }
            echo $total;
            break;

        case '/':
            for ($i = 1; $i < $len; $i++) {
                $total = $total / $arr[$i];
            }
            echo $total;
            break;

        default:
            echo "Неправильный формат строки со знаком арифметической операции" . "<br>";
            echo "Правильный формат: " . "<br>";
            echo "знак арифметической операции, один из следующих: " . "<br>";
            echo "+ (сложение), - (вычитание), * (умножение), / (деление)" . "<br>";
    }
}
array_print($arr_number, $arith_exp);

?>
