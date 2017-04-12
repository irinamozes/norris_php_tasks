<?php
//Класс для показа приветствия залогиневшемуся пользователю на каждой странице сайта
//и для показа названия списка файлов любого пользователя.
//Класс использует шаблонизатор twig с шаблоном privetHeader.twig.

class Ctwig extends ControllerParent {

  public function contr($modulServer, $login = NULL) {

    require_once 'vendor/autoload.php';

    try {
    // указывает где хранятся шаблоны
      $loader = new Twig_Loader_Filesystem('views');

    // инициализируем Twig
      $twig = new Twig_Environment($loader);

    // подгружаем шаблон
      $template = $twig->loadTemplate('privetHeader.twig');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание

      if (isset ($_COOKIE["login"]) && $modulServer !== 'spiski' ) {
        $sp = 0;

        echo $template->render(array(
          'sp' => $sp,
          'name' => $_COOKIE["login"]
        ));

      } elseif (!isset ($_COOKIE["login"])) {
        $sp = 0;

        echo $template->render(array(
          'sp' => $sp,
          'name' => $login
        ));

      }

      if ($modulServer == 'spiski' ) {
        $sp = 1;

        echo $template->render(array(
          'sp' => $sp,
          'name' => $login
        ));

       }

    } catch (Exception $e) {

      die ('ERROR: ' . $e->getMessage());

    }
  }
}
