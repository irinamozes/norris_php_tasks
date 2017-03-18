<?php
//Модель для показа списков пользователей и их фотографий
class ModelDataSp {
  use GeneralFooter;
  private $arData;

  public function __construct($arData) {
  $this->arData = $arData;

  }

  public function modelDataSp() {
    require_once "connect.php";
    $tab_name = strval ($this->arData[0]);
    $order_name = strval ($this->arData[1]);

    if ($this->arData[4] == 's') {
      $sqlUsers = "SELECT * FROM $tab_name  ORDER BY $order_name ASC ";

    } elseif ($this->arData[4] == 'f') {
      $userid = $this->arData[3];

      $sqlUsers = "SELECT * FROM $tab_name  where  user_id = $userid";

    } else {
      $imgid = $this->arData[3];

      $sqlUsers = "SELECT * FROM $tab_name  where  img_id = $imgid";

    }
    $result = $connection->query($sqlUsers);
    $row = mysqli_fetch_array($result);


    do {

      if ($this->arData[4] == 's') {

        if ($row[2] <18) {
          $user_age = ' Несовершеннолетний';
        } else {
          $user_age = ' Совершеннолетний';
        }

        $id_polz = $row[4];
        $sp_f = 'spisokf_'.$id_polz;


        printf("<p>Пользователь: " .$row[1] . "  Возраст: " .$row[2] .$user_age ."</p>");

        printf("<a href = " .$sp_f ." ><strong>Список файлов пользователя</strong></a>"."<br>");

      } elseif ($this->arData[4] == 'f') {

        $id_img = $row[1];
        $sp_f = 'spisoki_'.$id_img;

        printf("<p>Изображение: " .$row[0] ."</p>");

        printf("<a href = " .$sp_f ." ><strong>Показать</strong></a>"."<br>");

      } else {

        $sp_f = 'photos/'.$row[0];

        printf("<img src= " .$sp_f ." height = '420' >");


      }

    }

    while($row = mysqli_fetch_array($result));

  }
}
?>
