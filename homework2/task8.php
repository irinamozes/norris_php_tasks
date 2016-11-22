<?php
function smile() {
echo "<pre>
  ^ ^ ^ ^ ^ ^ ^ ^
  *  ~~~    ~~~ *
 $* < @  |  @ > *$
  *     { }     *
  *''~~~~~~~~~''*
         ^
      *******
</pre>";
 }

function pocket_smile($str) {
    preg_match('/[0-9]+\s/', $str, $result);
    $pockets = $result[0];
    $reg_smile = preg_match('/:\)/', $str);
    if ($reg_smile == true) {
        smile();
    } elseif ($pockets > 1000) {
        echo 'Сеть есть';
    }
}
pocket_smile("RX Packets:10000 errors:0 dropped:0 overruns:0 frame:0. :)");
?>
