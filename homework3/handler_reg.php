<?php
error_reporting (E_ALL);
require "connect.php";

$connection->query('SET NAMES "UTF-8"');

$sqlsave_cou = "SELECT COUNT(*) FROM user_save";
$cou_save = $connection->query($sqlsave_cou);
$row_save = mysqli_fetch_assoc($cou_save);

$sqllogin_cou = "SELECT COUNT(*) FROM users_login";
$cou_login = $connection->query($sqllogin_cou);
$row_login_1 = mysqli_fetch_assoc($cou_login);


if ($row_save ['COUNT(*)'] == 0) {

    $sqlLogin = 'insert into users_login (login, pass) value (?, ?)';
    $stmt = $connection->prepare($sqlLogin);

    //print_r($_SERVER );


    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);
    $stmt->bind_param('ss', $login, $pass);
    $stmt->execute();

    $uniq_info = mysqli_affected_rows($connection);
    print_r($uniq_info);

    $sqllogin_cou = "SELECT COUNT(*) FROM users_login";
    $cou_login = $connection->query($sqllogin_cou);
    $row_login_2 = mysqli_fetch_assoc($cou_login);

    if ($row_login_2['COUNT(*)'] == $row_login_1['COUNT(*)']) {
        echo "Такой логин уже существует. Введите другой логин"."<br>";
        echo "<a href='registration.php'><strong>Назад</strong></a>"."<br>";
        $connection->close();
        exit();
    }

     $sqllogin_id = "SELECT * FROM users_login ORDER BY user_id DESC LIMIT 1";
     $id_login = $connection->query($sqllogin_id);
     $login_id = mysqli_fetch_assoc($id_login);
     $login_id_save = $login_id['user_id'];

     $sqlsave_ins = "insert into user_save (user_id) value ($login_id_save)";
     $connection->query($sqlsave_ins);


     $sqlUsers = 'insert into users_profile (username, age, info, user_id) value (?, ?, ?, ?)';
     $stmt = $connection->prepare($sqlUsers);
     $username = strip_tags($_POST['name']);
     $age = strip_tags($_POST['age']);
     $info = strip_tags($_POST['info']);
     $stmt->bind_param('sisi', $username, $age, $info, $login_id_save);
     $stmt->execute();

} else {
    $sqlsave_id = "SELECT * FROM user_save";
    $id_login = $connection->query($sqlsave_id);
    $login_id = mysqli_fetch_assoc($id_login);
    $login_id_save = $login_id['user_id'];

    $pass = strip_tags($_POST['pass']);
    $sqlLogin = "update users_login set users_login.pass='$pass' where user_id = $login_id_save";
    $id_login_up = $connection->query($sqlLogin);

    $username = strip_tags($_POST['name']);
    $age = strip_tags($_POST['age']);
    $info = strip_tags($_POST['info']);
    $sqlUsers = "update users_profile set users_profile.username='$username', users_profile.age='$age', users_profile.info='$info' where user_id = $login_id_save";
    $id_login_up = $connection->query($sqlUsers);

}

if (!empty($_FILES['picture']['name'])) {
    $sqlImages = 'insert into images (img_name, user_id) value (?, ?)';
    $stmt = $connection->prepare($sqlImages);
    $name = strip_tags($_FILES['picture']['name']);
    $name = $login_id_save.'_'. $name;

    $imgName = $name;

    $stmt->bind_param('si', $imgName, $login_id_save);
    $stmt->execute();

    if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg"
        && $_FILES['picture']['type'] != "image/png") {
        echo  'выбран файл не формата jpeg, png или gif, файл не будет загружен';
    } else {

        $dirUpload = dirname(__FILE__);

        $uploads_dir = $dirUpload. '/photos';

        $tmp_name = $_FILES['picture']['tmp_name'];
        $destination = $uploads_dir.'/'.$name;
        $m = move_uploaded_file($tmp_name, $destination);

        //$user_name = "norris";

        chmod($destination, 0777);
        //chown($destination, $user_name);

    }
}

echo 'Данные успешно введены!'."<br>";
$connection->close();
echo "<a href='index.php'><strong>На главную</strong></a>"."<br>";
echo "<a href='edit.php'><strong>Редактировать профиль</strong></a>"."<br>";
echo "<a href='image_service.php'><strong>Фото сервис</strong></a>"."<br>";
