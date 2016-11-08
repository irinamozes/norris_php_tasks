<?php
$arr_number = array(1, 2, 3, 4, 5);
$arith_exp = '@2';

function array_print($arr, $str)
{
    $str_operation = substr($str, 0, 1);

    $str_number = substr($str, 1);

    $tf_number = ctype_digit($str_number);

    if ($tf_number === FALSE) {
        $str_operation = '!';
    }

    switch ($str_operation) {
        case '+':
            foreach ($arr as $value) {
                $value = $value + $str_number;
                echo $value . "<br>";
            }
            break;

        case '-':
            foreach ($arr as $value) {
                $value = $value - $str_number;
                echo $value . "<br>";
            }
            break;

        case '*':
            foreach ($arr as $value) {
                $value = $value * $str_number;
                echo $value . "<br>";
            }
            break;

        case '/':
            foreach ($arr as $value) {
                $value = $value * $str_number;
                echo $value . "<br>";
            }
            break;

        case '%':
        foreach ($arr as $value) {
            $value = $value % $str_number;
            echo $value . "<br>";
        }
            break;

        case '^':
        foreach ($arr as $value) {
            $value = $value ** $str_number;
            echo $value . "<br>";
        }
        break;

        default:
            echo "Неправильный формат строки с арифметическим действием" . "<br>";
            echo "Правильный формат: " . "<br>";
            echo "Первый символ - знак арифметической операции, один из следующих: " . "<br>";
            echo "+ (сложение), - (вычитание), * (умножение), / (деление), % (деление по модулю), ^ (возведение в степень)" . "<br>";
            echo "Последующие символы в строке должны обозначать натуральное число" . "<br>";
            echo 'Например: $arith_exp = "^2";';
    }
}
array_print($arr_number, $arith_exp);

?>
