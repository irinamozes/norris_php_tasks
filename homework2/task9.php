<?php
function read_file() {
    $handle = fopen('test.txt', 'r');
    if (!empty($handle)) {
        $contents = fread($handle, filesize('test.txt'));
    }
    echo $contents;
    fclose($handle);
}
 read_file();
