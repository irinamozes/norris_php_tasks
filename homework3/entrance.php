<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в систему зарегистрированных пользователей</title>
</head>
<body>
<form method="post" action="check_login.php">
    <table>
        <tr>
            <td>Логин:</td>
            <td>
                <label>
                    <input type="text" name="log" required>
                </label>
            </td>
        </tr>
        <tr>
            <td>Пароль:</td>
            <td>
                <label>
                    <input type="text" name="password" required>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="action" value="Войти"/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>

<?php
echo "<br>";

echo "<a href='index.php'><strong>На главную</strong></a>"."<br>";
