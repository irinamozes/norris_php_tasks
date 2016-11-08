<?php
$str = 'да полевеет правая нога';
$arr_str = explode(" ", $str);
function array_print()
{
    foreach (func_get_arg(0) as $i => $value) {
        echo "<p>$value</p>";
    }

    if (func_get_arg(1) === true) {
        $str = implode(" ", func_get_arg(0));
        return ($str);
    }
}
array_print($arr_str);
?>
