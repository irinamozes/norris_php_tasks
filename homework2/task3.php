<?php

function calcEverything()
{
    $str_operation = func_get_arg(0);

    $arr_num = func_get_args();

    array_splice($arr_num, 0, 1);

    switch ($str_operation) {
        case '+':
            function rsum($v, $w)
            {
                $v += $w;
                return $v;
            }

            $arr_num_pl = array_reduce($arr_num, "rsum");
            print_r($arr_num_pl);
            break;

        case '-':
            function rsubtr($v, $w)
            {
                $v = $v - $w;
                return $v;
            }

            $arr_num_min = array_reduce($arr_num, "rsubtr", $arr_num[1]);
            print_r($arr_num_min);
            break;


        case '*':
            function rmul($v, $w)
            {
                $v = $v * $w;
                return $v;
            }

            $arr_num_mul = array_reduce($arr_num, "rmul", $arr_num[0]);
            print_r($arr_num_mul);
            break;

        case '/':
            function rdiv($v, $w)
            {
                $v /= $w;
                return $v;
            }

            $arr_num_div = array_reduce($arr_num, "rdiv", $arr_num[0]);
            print_r($arr_num_div);
            break;

        default:
            echo "Неопознанная арифметическая операция";

    }

}
    calcEverything('/', 1, 2, 3, 5.2);

?>
