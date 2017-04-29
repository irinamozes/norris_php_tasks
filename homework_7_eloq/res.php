<?php
require "vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;
$sp_f = $_COOKIE["imresrot"];
$sp_fch = $_COOKIE["imresrotch"];

$img = Image::make($sp_f);

// now you are able to resize the instance
$img->resize(300, 225);


$img->save($sp_fch);

printf("<img src= " .$sp_fch .">");
