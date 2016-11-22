<?php
$str = 'да полевеет правая нога';
$arr_str = explode(" ", $str);
function array_print($arr, $bool = false)
{
    foreach ($arr as $i => $value) {
        echo "<p>$value</p>";
    }

    if ($bool) {
        $str = implode(" ", $arr);
        return ($str);
    }
}
echo array_print($arr_str);
?>
