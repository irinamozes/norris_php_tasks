<?php

function calcEverything()
{
    $str_operation = func_get_arg(0);

    $arr_num = func_get_args();

    array_splice($arr_num, 0, 1);

    foreach ($arr_num as $value) {
        if (is_float($value) or is_int($value)) {
        } else {
            echo "Элемент $value  не является числом. Некорректный ввод даных массива<br>";
            return;
        }
    }

    $len = count($arr_num);
    $total = $arr_num[0];

    switch ($str_operation) {
        case '+':
            for ($i = 1; $i < $len; $i++) {
                $total = $total + $arr_num[$i];
            }
            echo $total;
            break;

        case '-':
             for ($i = 1; $i < $len; $i++) {
                 $total = $total - $arr_num[$i];
             }
             echo $total;
             break;


        case '*':
            for ($i = 1; $i < $len; $i++) {
                $total = $total * $arr_num[$i];
            }
            echo $total;
            break;

        case '/':
            for ($i = 1; $i < $len; $i++) {
                $total = $total / $arr_num[$i];
            }
            echo $total;
            break;

        default:
            echo "Неопознанная арифметическая операция";

    }

}
    calcEverything('*', 2, 4, 6, 8);

?>
