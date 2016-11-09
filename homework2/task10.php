
<?php
    $f_name = "anothertest.txt";

    $fp = fopen($f_name, "w");
    fwrite($fp, "Hello again!");

    if (file_exists($f_name)) {
        echo "файл есть" . "<br>";
        readfile($f_name);
    }

?>
