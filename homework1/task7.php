<?php
for ($i = 1; $i <= 10; $i++) {
     $str = '';
     for ($j = 1; $j <= 10; $j++) {
          $rezult =  strval($i * $j);
          if (strlen($rezult) < 2) {
              $rezult = ' '.$rezult;
          }
          if (fmod($i, 2) == 0) {
              if (fmod($j, 2) == 0) {
                  $str = $str.'('.$rezult.')';
              } else {
                  $str = $str.' '.$rezult.' ';
              }
          } else {
              if (fmod($j, 2) == 0) {
                  $str = $str.' '.$rezult.' ';
              } else {
                  $str = $str.'['.$rezult.']';
              }
          }
     }
     echo $str."\n";
}
?>
