<?php
require "connect.php";

if ($_POST['action'] == 'Переименовать') {

    $sqlImgEdit = 'UPDATE  images SET img_name = ? WHERE img_id = ?';
    $stmt = $connection->prepare($sqlImgEdit);

    $imgId = strip_tags($_POST['id']);
    $newName = strip_tags($_POST['edit']);

    $stmt->bind_param('si', $newName, $imgId);
    $stmt->execute();

    $oldName = $_POST['old'];
    $newName = $_POST['userid'] . $_POST['edit'];


$dirUpload = dirname(__FILE__);
    $path = $dirUpload. '/photos';
    $path_old = $path.'/'.$oldName;
    $path_new = $path.'/'.$newName;

    $ren = rename($path_old, $path_new);
    if ($ren == true) {
        echo 'Изображение успешно переименовано!';
    } else {
        echo 'Изображение переименовать не удалось!';
    }

}

if ($_POST['action'] == 'Удалить') {

    $sqlImgEdit = 'DELETE  FROM images WHERE img_id = ?';
    $stmt = $connection->prepare($sqlImgEdit);

    $imgId = $_POST['id'];

    $stmt->bind_param('i', $imgId);
    $stmt->execute();

    $imgName = $_POST['userid'] . $_POST['edit'];

    $dirUpload = dirname(__FILE__);
    $path = $dirUpload. '/photos';
    $path_del = $path.'/'.$imgName;

    $del = unlink($path_del);
    if ($del == true) {
        echo 'Изображение успешно удалено!';
    } else {
        echo 'Изображение удалить не удалось!';
    }

}
$connection->close();
echo "<a href='index.php'><strong>На главную</strong></a>"."<br>";
echo "<a href='edit.php'><strong>Редактировать профиль</strong></a>"."<br>";
echo "<a href='image_service.php'><strong>Фото сервис</strong></a>"."<br>";
