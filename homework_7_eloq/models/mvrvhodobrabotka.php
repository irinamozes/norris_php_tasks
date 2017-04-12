<?php
//Модель для обработки валидности ввода информации входа
class Model {


  public function mod($modulServer) {

    include_once "models/mrecapobrabotka.php";

    require_once "mgeneralModel.php";

    error_reporting (E_ALL);
    require_once "connect.php";


    $users = User::all();

    $lpv = strip_tags($_POST['login']).md5(strip_tags($_POST['password']));

    $id = 0;
    foreach ($users as $user) {
      $lp = $user->login.$user->pass;
      if ($lpv == $lp){
        $id = $user->id;
        $login = $user->login;
      }
    }


    if ($id) {
      setcookie("iduser", $id);
      setcookie("login", $login);


      $img_ar_id = $img_ar = Image::where('user_id', '=', $id)->orderBy('id', 'desc')->first();

      if ($img_ar_id) {
        setcookie("idimg", $img_ar_id->id);
      } else {
        setcookie("idimg", 0);
      }


      include_once "controllers/ctwig.php";

      $modulServer = "vrvhodobrabotka";

      $twi = new Ctwig ($modulServer);
      $twi->contr($modulServer,$login);


      echo 'Регистрация прошла успешно!'."<br>";

      include_once "views/traitFooter.php";

    } else {
      echo 'Неверный логин или пароль!'."<br>";
      echo "<a href='glvhod'><strong>Назад</strong></a>"."<br>";

      exit();
    }

  }
}
