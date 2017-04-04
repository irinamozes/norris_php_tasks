<?php
//проверяет существует ли еще залогиневшийся пользователь/

if ($_COOKIE['iduser']) {

  error_reporting (E_ALL);
  $host = 'localhost';
  $base = 'loft_db';
  $user = 'root';
  $pass = '123';
  $connection = @new mysqli($host, $user, $pass, $base);
  if (mysqli_connect_errno()) {
      die(mysqli_connect_error());
  }
  $connection->query('SET NAMES "UTF-8"');


  $proverkaId = $_COOKIE['iduser'];
  $sql = "SELECT * FROM users_login where user_id = $proverkaId";
  $id_log = $connection->query($sql);
  $rowid = mysqli_fetch_array($id_log);

  if (count($rowid) == 0) {

    setcookie("iduser", 0);
    setcookie("idimg", 0);
    setcookie("login", '');
    setcookie("vhod", 'vihod');
    echo "Такого пользователя не существует. Возможно, он был удален.";
    echo "<br>"."<a href='glavnaya'><strong>Выход</strong></a>"."<br>";
    exit();
  }
  $connection->close();

} else {
    //echo "Дальше";
}
