<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form enctype="multipart/form-data" action="handler_reg.php" method="post">
    <table>
        <tr>
            <td>Введите логин:</td>
            <td>
                <label>
                    <input type="text" name="login" required autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td>
                <label >
                    <input type="password" name="pass" required/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите имя:</td>
            <td>
                <label>
                    <input type="text" name="name"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите возраст:</td>
            <td>
                <label>
                    <input type="text" name="age"/>
                </label>
            </td>
        </tr>

        <tr>
            <td>Расскажите о себе:</td>
            <td>
                <label>
                    <textarea name="info" cols="40" rows="5"></textarea>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="action" value="Сохранить данные"/>
            </td>
            <td>
                <input type="reset" value="Очистить форму"/>
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Вернуться на главную</a>
</body>
</html>
