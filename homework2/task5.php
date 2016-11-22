<?php

function palindrom ($str_palin)
{
    $str_palin = mb_strtolower($str_palin);

    $str_palin = str_replace(" ", "", $str_palin);
    echo $str_palin . "<br>";

    $str_palin_len = mb_strlen($str_palin);

    $str_palin_rev = '';
    for ($i = $str_palin_len - 1; $i >= 0; $i--) {
        $rev = mb_substr($str_palin, $i, 1);
        $str_palin_rev = $str_palin_rev . $rev;
    }

    if ($str_palin === $str_palin_rev) {
        mes(true);
        return true;

    } else {
        mes(false);
        return false;
    }
}


function mes($tf)
{
    if ($tf) {
        echo 'Функция palindrom вернула true, так как в качестве  аргумента ей был передан полиндром';
    } else {
        echo 'Функция palindrom вернула false, так как в качестве аргумента ей был передан не полиндром';
    }
}

palindrom('Лев с ума ламу свел');

?>
