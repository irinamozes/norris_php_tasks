<?php
//Модель для обработки валидности информации регистрации и редактирования

class Model {

  use GeneralFooter;

  public function mod() {

      error_reporting (E_ALL);
      require "connect.php";

      $connection->query('SET NAMES "UTF-8"');

      if ($_COOKIE['iduser'] == 0) {

        $sqlLogin = 'insert into users_login (login, pass) value (?, ?)';
        $stmt = $connection->prepare($sqlLogin);

        $login = strip_tags($_POST['login']);
        $pass = strip_tags($_POST['pass']);
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

        $sqlUsers = 'insert into users_profile (username, age, info, user_id) value (?, ?, ?, ?)';
        $stmt = $connection->prepare($sqlUsers);
        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);
        $info = strip_tags($_POST['info']);
        $stmt->bind_param('sisi', $username, $age, $info, $login_id_save);
        $stmt->execute();

      } else {


        $login_id_save = $_COOKIE['iduser'];

        $pass = strip_tags($_POST['pass']);
        $sqlLogin = "update users_login set users_login.pass='$pass' where user_id = $login_id_save";
        $id_login_up = $connection->query($sqlLogin);

        $username = strip_tags($_POST['name']);
        $age = strip_tags($_POST['age']);
        //$info = mysqli_real_escape_string(strip_tags($_POST['info']), $connection );
        $info = strip_tags($_POST['info'] );
        $sqlUsers = "update users_profile set users_profile.username='$username', users_profile.age='$age', users_profile.info='$info' where user_id = $login_id_save";
        $id_login_up = $connection->query($sqlUsers);
      }

      if (!empty($_FILES['picture']['name'])) {
        $sqlImages = 'insert into images (img_name, user_id) value (?, ?)';
        $stmt = $connection->prepare($sqlImages);
        $name = strip_tags($_FILES['picture']['name']);
        $name = $login_id_save.'_'. $name;

        $imgName = $name;

        $stmt->bind_param('si', $imgName, $login_id_save);
        $stmt->execute();

        if ($_FILES['picture']['type'] != "image/gif" && $_FILES['picture']['type'] != "image/jpeg" && $_FILES['picture']['type'] != "image/png") {
          echo  'выбран файл не формата jpeg, png или gif, файл не будет загружен';
        } else {

          $imgId = mysqli_insert_id ( $connection );
          setcookie("idimg", $imgId);

          $dirUpload = dirname(__FILE__);
          $dirPos = strripos ( $dirUpload , '/' );
          $dirUpload = substr($dirUpload, 0, $dirPos );


          $uploads_dir = $dirUpload. '/photos';


          $tmp_name = $_FILES['picture']['tmp_name'];
          $destination = $uploads_dir.'/'.$name;
          $m = move_uploaded_file($tmp_name, $destination);

          $user_name = "norris";

          chmod($destination, 0777);
      //  chown($destination, $user_name);

        }
      }

      echo 'Данные успешно введены!'."<br>";
      $connection->close();

    
  }
}
