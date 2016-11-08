<?php

function table_mult($n1, $n2)
{
    if (is_int($n1) && is_int($n2) && $n1 <= 10 && $n2 <= 10) {

        for ($i = 1; $i <= $n1; $i++) {
            $str = '';
            for ($j = 1; $j <= $n2; $j++) {
                $rezult =  strval($i * $j);

                if (strlen($rezult) < 2) {
                    $rezult = $rezult.'_';
                }
                $str = $str.' '.$rezult;

            }
            echo $str."<br>";
        }

    } else {
        echo "Неверные значения аргументов функции";
    }
}
table_mult(8, 6);
?>
