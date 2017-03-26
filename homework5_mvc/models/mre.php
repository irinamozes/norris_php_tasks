<?php
//Модель для показа форм регистрации и редактирования
class ModelDataRe {

  public $arData;

  public function modelRe() {

      error_reporting (E_ALL);
      require "connect.php";

      //echo $_COOKIE['iduser']."<br>";
      //echo $_COOKIE['idimg']."<br>";
      //print_r ($_COOKIE);

      $login_id_save = $_COOKIE['iduser'];
      $imgSrc = $_COOKIE['idimg'];

      if (!$login_id_save) {
        $lo = 'Введите логин:';
        $disabl = "text";
        $login_ar_login = '';
        $login_ar_pass = '';
        $profile_ar_name = '';
        $profile_ar_age = '';
        $profile_ar_info = '';
        $img_ar_name = '';
        $img_ar_height = '';
        $place_ar_holder = '';
        $requir = 'required';

      } else {

        $sqlLogin = "SELECT * FROM users_login where user_id = $login_id_save";
        $id_login = $connection->query($sqlLogin);
        $login_ar = mysqli_fetch_assoc($id_login);
        $login_ar_login = $login_ar['login'];
        //$login_ar_pass = $login_ar['pass'];
        $login_ar_pass ='';
        $lo = 'Логин: ' .$login_ar_login;
        $disabl = "hidden";
        if ($_COOKIE["idimg"]) {
          $img_ar_height = 220;
        } else {
          $img_ar_height = '';
        }

        $place_ar_holder = 'Можно сменить пароль';
        $requir = '';

        $sqlprofile = "SELECT * FROM users_profile where user_id = $login_id_save";
        $id_profile = $connection->query($sqlprofile);
        $profile_ar = mysqli_fetch_assoc($id_profile);
        $profile_ar_name = $profile_ar['username'];
        $profile_ar_age = $profile_ar['age'];
        $profile_ar_info = $profile_ar['info'];

        if ($_COOKIE['idimg']) {
          $imgId = $_COOKIE['idimg'];
          $sqlimg = "SELECT img_name FROM images where img_id = $imgId";
          $id_img = $connection->query($sqlimg);
          $img_ar = mysqli_fetch_assoc($id_img);
          $img_ar_name = $img_ar['img_name'];

        } else {
          $sqlimg = "SELECT img_name FROM images where user_id = $login_id_save ORDER BY img_id DESC LIMIT 1";
          $id_img = $connection->query($sqlimg);
          $img_ar = mysqli_fetch_assoc($id_img);
          $img_ar_name = $img_ar['img_name'];

        }

        $connection->close();
      }

      $this->arData[0] = $lo;
      $this->arData[1] = $disabl;
      $this->arData[2] = $login_ar_login;
      $this->arData[3] = $login_ar_pass;
      $this->arData[4] = $profile_ar_name;
      $this->arData[5] = $profile_ar_age;
      $this->arData[6] = $profile_ar_info;
      $this->arData[7] = 'photos/' . $img_ar_name;
      $this->arData[8] = $img_ar_height;
      $this->arData[9] = $place_ar_holder;
      $this->arData[10] = $requir;
      return $this->arData;

  }
}
