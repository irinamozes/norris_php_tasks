<?php
//Модель для показа списков пользователей и их фотографий
class ModelDataSp {

  private $arData;

  public function __construct($arData) {
  $this->arData = $arData;

  }

  public function modelSp() {
    require_once "connect.php";
    require_once "proverka.php";
    require_once "mgeneralModel.php";


    if ($this->arData[4] == 's') {

      $result = Profile::orderBy('age', 'asc')->get();


    } elseif ($this->arData[4] == 'f') {
      $usersid = $this->arData[3];


      $result = Image::where('user_id', '=', $usersid)->get();

    } else {
      $imgid = $this->arData[3];

      $result = Image::where('id', '=', $imgid)->get();

    }

    if (isset ($usersid)) {

        $resultid = User::where('id', '=', $usersid)->first();

        $login = $resultid->login;

        include_once "controllers/ctwig.php";
        $twi = new Ctwig ('spiski');

        $twi->contr('spiski', $login);

      }


      foreach ($result as $res) {

        if ($this->arData[4] == 's') {

          if ($res->age <18) {
            $user_age = ' Несовершеннолетний';
          } else {
            $user_age = ' Совершеннолетний';
          }

          $id_polz = $res->user_id;
          $sp_f = 'spisokf_'.$id_polz;


          printf("<p>Пользователь: " .$res->username . "  Возраст: " .$res->age .$user_age ."</p>");

          printf("<a href = " .$sp_f ." ><strong>Список файлов пользователя</strong></a>"."<br>");

        } elseif ($this->arData[4] == 'f') {

          $id_img = $res->id;
          $sp_f = 'spisoki_'.$id_img;

          printf("<p>Изображение: " .$res->img_name ."</p>");

          printf("<a href = " .$sp_f ." ><strong>Показать</strong></a>"."<br>");

        } else {

          $sp_f = 'photos/'.$res->img_name;
          $sp_fch = 'photos/'. 'ch'.$res->img_name;

          setcookie("imresrot", $sp_f);
          setcookie("imresrotch", $sp_fch);

          printf("<img src= " .$sp_f ." height = '420' >");


          echo "<br>"."<a href='res.php' target='_blank'><strong>Изменить размер на 480х480px</strong></a>". " ";
          echo " "."<a href='rot.php' target='_blank'><strong>Повернуть на 45 градусов</strong></a>"."<br>";

        }

      }

    }
  }

?>
