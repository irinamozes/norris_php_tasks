<?php

//Программа проверки входа в систему зарегистрированных пользователей

require "connect.php";
$sql = 'SELECT * FROM users_login';
$result = $connection->query($sql);

$id = 0;
while ($row = mysqli_fetch_row($result)) {
    $lp = $row[0].$row[1];
    $lpv = strip_tags($_POST['log']). strip_tags($_POST['password']);
    if ($lpv == $lp){
        $id = $row[2];
    }
}

if ($id) {
    setcookie("iduser", $id);

    $connection->close();
    echo "<a href='edit.php'><strong>Редактировать профиль</strong></a>"."<br>";
    echo "<a href='image_service.php'><strong>Фото сервис</strong></a>"."<br>";

} else {
      echo 'Неверный логин или пароль!'."<br>";
      $connection->close();
      echo "<a href='entrance.php'><strong>Назад</strong></a>"."<br>";
}

echo "<a href='index.php'><strong>На главную</strong></a>";
