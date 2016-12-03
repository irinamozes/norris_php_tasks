<!doctype html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование профиля</title>
</head>
<?php
error_reporting (E_ALL);
require "connect.php";

$sqlsave_id = "SELECT * FROM user_save";
$id_login = $connection->query($sqlsave_id);
$login_id = mysqli_fetch_assoc($id_login);
$login_id_save = $login_id['user_id'];

$sqlLogin = "SELECT * FROM users_login where user_id = $login_id_save";
$id_login = $connection->query($sqlLogin);
$login_ar = mysqli_fetch_assoc($id_login);
$login_ar_login = $login_ar['login'];
$login_ar_pass = $login_ar['pass'];

$sqlprofile = "SELECT * FROM users_profile where user_id = $login_id_save";
$id_profile = $connection->query($sqlprofile);
$profile_ar = mysqli_fetch_assoc($id_profile);
$profile_ar_name = $profile_ar['username'];
$profile_ar_age = $profile_ar['age'];
$profile_ar_info = $profile_ar['info'];

$connection->close()

?>

<body>
<form enctype="multipart/form-data" action="handler_reg.php" method="post">
    <table>
        <tr>
            <td>Введите логин:</td>
            <td>
                <label>
                    <input type="text" name="login" value="<?php echo $login_ar_login ?>" disabled />
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td>
                <label >
                    <input type="text" name="pass" value="<?php echo $login_ar_pass ?>" required autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите имя:</td>
            <td>
                <label>
                    <input type="text" name="name" value="<?php echo $profile_ar_name ?>"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите возраст:</td>
            <td>
                <label>
                    <input type="text" name="age" value="<?php echo $profile_ar_age ?>"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Добавьте фотографию:</td>
            <td>
                <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
                <input type="file" name="picture"/>
            </td>
        </tr>

        <tr>
            <td>Расскажите о себе:</td>
            <td>
                <label>
                    <textarea name="info" cols="40" rows="5" >"<?php echo $profile_ar_info ?>"</textarea>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="action" value="Сохранить данные"/>
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Вернуться на главную</a>
</body>
</html>
