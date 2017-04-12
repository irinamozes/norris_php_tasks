<?php
require "vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;
$sp_f = $_COOKIE["imresrot"];
$sp_fch = $_COOKIE["imresrotch"];

$img = Image::make($sp_f);

// rotate image 45 degrees clockwise
$img->rotate(45);


$img->save($sp_fch);

printf("<img src= " .$sp_fch .">");
