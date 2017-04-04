<?php
//Модель для обработки валидности информации регистрации и редактирования

class Model {


  public function mod($modulServer) {

      error_reporting (E_ALL);
      require "connect.php";

      $connection->query('SET NAMES "UTF-8"');

      include_once "controllers/ctwig.php";
      $modulServer = "vreobrabotka";

      $twi = new Ctwig ($modulServer);

      if ($_COOKIE['iduser'] == 0) {

        include_once "mrecapobrabotka.php";

        $sqlLogin = 'insert into users_login (login, pass) value (?, ?)';
        $stmt = $connection->prepare($sqlLogin);

        $login = strip_tags($_POST['login']);
        $pass = md5(strip_tags($_POST['pass']));
        $stmt->bind_param('ss', $login, $pass);
        $stmt->execute();

        $uniq_info = mysqli_affected_rows($connection);


          if ($uniq_info <= 0) {
            echo "Такой логин уже существует. Введите другой логин"."<br>";
            echo "<a href='registraciya'><strong>Назад</strong></a>"."<br>";
            $connection->close();
            exit();
          }


        $login_id_save = mysqli_insert_id ( $connection );


        setcookie("iduser", $login_id_save);
        setcookie("login", $login);

        $sqlUsers = 'insert into users_profile (username, age, info, user_id) value (?, ?, ?, ?)';
        $stmt = $connection->prepare($sqlUsers);
        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);
        $info = strip_tags($_POST['info']);
        $stmt->bind_param('sisi', $username, $age, $info, $login_id_save);
        $stmt->execute();


        $twi->contr($modulServer, $login);


      } else {


        $login_id_save = $_COOKIE['iduser'];
        $login =  $_COOKIE['login'];


        if (strip_tags($_POST['pass'])) {
          $pass = md5(strip_tags($_POST['pass']));
          $sqlLogin = "update users_login set users_login.pass='$pass' where user_id = $login_id_save";
          $id_login_up = $connection->query($sqlLogin);
        }


        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);
        //$info = mysqli_real_escape_string(strip_tags($_POST['info']), $connection );
        $info = strip_tags($_POST['info'] );
        $sqlUsers = "update users_profile set users_profile.username='$username', users_profile.age='$age', users_profile.info='$info' where user_id =   $login_id_save";
        $id_login_up = $connection->query($sqlUsers);

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
            $sqlImages = 'insert into images (img_name, user_id) value (?, ?)';
            $stmt = $connection->prepare($sqlImages);
            $name = strip_tags($_FILES['picture']['name']);
            $name = $login_id_save.'_'. $name;

            $imgName = $name;

            $stmt->bind_param('si', $imgName, $login_id_save);
            $stmt->execute();

            $imgId = mysqli_insert_id ( $connection );
            setcookie("idimg", $imgId);
            //$uploads_dir = $dirUpload. '/photos';
          } else {
            setcookie("idimg", 0);
            echo  'Произошла ошибка, файл не будет загружен'. "<br>";
          }

          //$user_name = "norris";

          //  chown($destination, $user_name);

        }
      } else {

        setcookie("idimg", 0);

      }


      echo 'Данные успешно введены!'."<br>";
      //setcookie("vhod", 'vhod');
      $connection->close();
      include_once "views/traitFooter.php";


  }
}
