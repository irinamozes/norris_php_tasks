<?php
//access_token=0ef4ed989cb6966b03d2595e814c2723780f9332aa41a2382553eebe53f696a0d5c1ce7f60ab0deceff6a
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VK photo</title>
</head>
<body>
<form action="vk1_wall.php" method="post" enctype="multipart/form-data" >
    <table>
        <tr>
            <td>
                    <label>Выберите изображение:
                    <input type="file" name="image">
                    </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Введите id пользователя vk
                    <input type="text" name="user_id">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Отправить">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
