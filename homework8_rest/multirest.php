<?php
require_once 'vendor/autoload.php';
require_once 'connect.php';
require_once 'mrelationModel.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
  $idgood = strip_tags($_GET['getgood']);
  $goo = Good::where('id', '=', $idgood)->first();
  echo json_encode($goo);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $idcat = strip_tags($_POST['getcat']);
  $name = strip_tags($_POST['getname']);

  $newgood = Good::insertGetId(['goodname' => $name, 'categories_id' => $idcat]);

  $goo = Good::where('id', '=', $newgood)->first();
  echo json_encode($goo);

}

if ($_SERVER['REQUEST_METHOD'] == "PUT") {
  $idgood = strip_tags($_REQUEST['getgood']);
  $newname = strip_tags($_REQUEST['getname']);

  $good =Good::where('id', '=', $idgood)->update(['goodname' => $newname]);

  $goo = Good::where('id', '=', $idgood)->first();
  echo json_encode($goo);

}
