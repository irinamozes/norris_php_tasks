<?php
//Модель для обработки валидности информации регистрации и редактирования

class Model {


  public function mod($modulServer) {

      error_reporting (E_ALL);
      require "connect.php";

      require_once "mgeneralModel.php";


      include_once "controllers/ctwig.php";
      $modulServer = "vreobrabotka";

      $twi = new Ctwig ($modulServer);


      if ($_POST['pass']) {
        $password = strip_tags($_POST['pass']);
      } else {
        $password = 'AAAAAAAA';
      }


      $validAr = [
          'username' => strip_tags($_POST['name']),
          'age' => strip_tags($_POST['age']),
          'info' => strip_tags($_POST['info']),
          'login' => strip_tags($_POST['login']),
          'pass' => $password,
          'ip' => $_SERVER['REMOTE_ADDR']

      ];


      $valid = GUMP::is_valid($validAr, [
        'username' => 'required|min_len,5',
        'age' => 'required|min_numeric,10',
        'login' => 'required|min_len,5',
        'pass' => 'required|min_len,8',
        'info' => 'required|min_len,50',
        'ip' => 'required|valid_ip',
        ]);

      if ($valid === true) {
        $validation = 1;

      } else {
        echo "Введены неверные данные";
        if ($_COOKIE['iduser'] == 0) {
          echo "<a href='reregistraciya'><strong>Назад</strong></a>"."<br>";
        } else {

          echo "<a href='reredactor'><strong>Назад</strong></a>"."<br>";

        }
        exit();

      }


      if ($_COOKIE['iduser'] == 0) {

        include_once "mrecapobrabotka.php";


        $login = strip_tags($_POST['login']);
        $pass = md5(strip_tags($_POST['pass']));


        $uniq_info = User::where('login', '=', $login)->first();


        if ($uniq_info) {
          echo "Такой логин уже существует. Введите другой логин"."<br>";
          echo "<a href='reregistraciya'><strong>Назад</strong></a>"."<br>";

          exit();
        }


        $login_id_save = User::insertGetId(['login' => $login, 'pass' => $pass]);

        setcookie("iduser", $login_id_save);
        setcookie("login", $login);

        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);
        $info = strip_tags($_POST['info']);
        $ip =  $_SERVER['REMOTE_ADDR'];

        $prof = Profile::insert(['username' => $username, 'age' => $age, 'info' => $info, 'user_id' => $login_id_save, 'ip' => $ip]);

        $twi->contr($modulServer, $login);

      } else {

        $login_id_save = $_COOKIE['iduser'];
        $login =  $_COOKIE['login'];


        if (strip_tags($_POST['pass'])) {
          $pass = md5(strip_tags($_POST['pass']));

          $pass_id_save = User::where('id', '=', $login_id_save)->update(['pass' => $pass]);

        }


        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);

        $info = strip_tags($_POST['info'] );

        $ip =  $_SERVER['REMOTE_ADDR'];

        $prof = Profile::where('user_id', '=', $login_id_save)->update(['username' => $username, 'age' => $age, 'info' => $info]);

        $twi->contr($modulServer, $login);
      }

      if (!empty($_FILES['picture']['name'])) {

        if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg" && $_FILES['picture']['type'] != "image/png") {
          setcookie("idimg", 0);

          echo  'выбран файл не формата jpeg, png или gif, файл не будет загружен';
        } else {

          $dirUpload = dirname(__FILE__);
          $dirPos = strripos ( $dirUpload , '/' );
          $dirUpload = substr($dirUpload, 0, $dirPos );

          if (!empty($dirUpload)) {
            $uploads_dir = $dirUpload. '/photos';
          } else {
            $uploads_dir = 'photos';
          }

          $name = strip_tags($_FILES['picture']['name']);
          $name = $login_id_save.'_'. $name;
          $tmp_name = $_FILES['picture']['tmp_name'];
          $destination = $uploads_dir.'/'.$name;

          $m = move_uploaded_file($tmp_name, $destination);
          chmod($destination, 0777);

          if ($m) {

            $name = strip_tags($_FILES['picture']['name']);
            $name = $login_id_save.'_'. $name;

            $imgName = $name;

            $imgId = Image::insertGetId(['img_name' => $imgName, 'user_id' => $login_id_save]);

            setcookie("idimg", $imgId);

          } else {
            setcookie("idimg", 0);
            echo  'Произошла ошибка, файл не будет загружен'. "<br>";
          }

        }
      } else {

        setcookie("idimg", 0);

      }


      echo 'Данные успешно введены!'."<br>";


      include_once "views/traitFooter.php";

    }
}
