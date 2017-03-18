<?php
//Шаблон для показа списка пользователей, их файлов и картинок. Вставляется в generalHeader.php
include 'models/'.'msp.php';
$data = new ModelDataSp($dataAr);
$data->modelDataSp();
$data->generalFooter();
?>
