<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="//www.gstatic.com/recaptcha/admin/favicon.ico" type="image/x-icon"/>
    <style type="text/css">
        body {
            margin: 1em 5em 0 5em;
            font-family: sans-serif;
        }
        fieldset {
            display: inline;
            padding: 1em;
        }
    </style>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<div class="get">
  <h4> Получение нужного товара из базы данных </h4>
  <label>Укажите id товара
    <input type="text" name="getgood" class="getgood">
  </label>
  <button class="getbut">Отправить запрос методом "GET"</button>
  <p class="getmes"> Результат будет выведен в консоль </p>
</div>

<br>

<div class="post">
<h4> Вставка нового товара в базу данных </h4>
<label>Укажите id категории
    <input type="text" name="getcat" class="getcategory">
</label>
<br>
<label>Укажите название товара
    <input type="text" name="getname" class="getnamegood">
</label>
    <button class="postbut">Отправить запрос методом "POST"</button>
    <p class="posttmes"> Результат будет выведен в консоль </p>
</div>

<br>

<div class="put">
<h4> Изменение названия товара в базе данных </h4>
<label>Укажите id товара
    <input type="text" name="getgood" class="getgood">
</label>
<br>
<label>Укажите новое название товара
    <input type="text" name="getname" class="getnamegood">
</label>
    <button class="putbut">Отправить запрос методом "PUT"</button>
    <p class="putmes"> Результат будет выведен в консоль </p>
</div>

<br>

<script src="main.js"></script>

</body>
</html>
