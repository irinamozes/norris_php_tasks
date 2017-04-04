<?php
//Общий шаблон для всех страниц с разметкой. В <body> вставляется шаблон с параметром $modulServer - названием динамической страницы
require_once "proverka.php";
?>
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

<?php
    if ($modulServer !== 'reregistraciya' && $modulServer !== 'glvhod' ) {

      include 'controllers/ctwig.php';

      $twi = new Ctwig ($modulServer);

      $twi->contr($modulServer);


    }
?>

<?php

  $modulmin = substr ( $modulServer, 0, 4 );
  include 'views/'.$modulmin.'Header'.'.php';

 ?>

<?php if (substr ($modulServer, 0, 6) !== 'spisok') :?>
  <?php if ($modulServer == 'reregistraciya' || $modulServer == 'glvhod' || $modulServer == 'glpost' ):?>

    <?php include 'views/'.'captchaHeader.php';?>

  <?php endif ?>

  <input type="submit" name="action" value="Отправить данные по назначению"/>

  </form>
<?php endif ?>

<?php
  if ($modulServer == 'reregistraciya' || $modulServer == 'glvhod' ) {


     echo "<br>"."<a href='glavnaya'><strong>На главную</strong></a>"."<br>";


  } else {

    include_once 'views/traitFooter.php';

  }

?>

</body>
</html>
