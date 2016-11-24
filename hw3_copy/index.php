
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>


<?php
$host = 'localhost';
$base = 'lschool_db';
$user = 'root';
$pass = '123';
$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}

$connection->query('SET NAMES "UTF-8"');
$sqlsave_del = "DELETE FROM user_save";

$connection->query($sqlsave_del);
?>


<title>Document</title>
<p>
    <a href="registration.php"><strong>Зарегистрироваться</strong></a>
    <span>****если Вы уже зарегистрировались, то </span>
    <a href="entrance.php"><strong>Войти</strong></a>
</p>
</body>
</html>
