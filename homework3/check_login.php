<?php

//Программа проверки входа в систему зарегистрированных пользователей

$host = 'localhost';
$base = 'lschool_db';
$user = 'root';
$pass = '123';
$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');
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
        $sqlsave_ins = "insert into user_save (user_id) value ($id)";
        $connection->query($sqlsave_ins);
        $connection->close;
        echo "<a href='edit.php'><strong>Редактировать профиль</strong></a>"."<br>";
        echo "<a href='index.php'><strong>Загрузить фото</strong></a>"."<br>";

    } else {
      echo 'Неверный логин или пароль!'."<br>";
          $connection->close;
    }

    echo "<a href='index.php'><strong>На главную</strong></a>";
