<?php
//Общий шаблон футера для нескольких страниц.
trait GeneralFooter {

    public function generalFooter() {
      echo "<br>";
      echo "<br>";
      echo "<a href='glavnaya'><strong>На главную</strong></a>"."<br>";
      echo "<a href='redactor'><strong>Редактировать профиль</strong></a>"."<br>";
      echo "<a href='spisok'><strong>Списки пользователей и их файлов</strong></a>"."<br>";
    }
}
?>
