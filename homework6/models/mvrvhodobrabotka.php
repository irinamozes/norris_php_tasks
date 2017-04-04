<?php
//Модель для обработки валидности ввода информации входа
class Model {

  //use GeneralFooter;

  public function mod($modulServer) {

    include_once "models/mrecapobrabotka.php";

    error_reporting (E_ALL);
    require_once "connect.php";

    $sql = 'SELECT * FROM users_login';
    $result = $connection->query($sql);

    $id = 0;
    while ($row = mysqli_fetch_row($result)) {
      $lp = $row[0].$row[1];
      $lpv = strip_tags($_POST['login']).md5(strip_tags($_POST['password']));
      //$lpv_mod5 = md5($lpv);
      //$lpv = strip_tags($_POST['login']).$lpv_mod5;

      if ($lpv == $lp){
        $id = $row[2];
        $login = $row[0];
      }
    }

    if ($id) {
      setcookie("iduser", $id);
      setcookie("login", $login);

      $sqlimg = "SELECT img_id FROM images where user_id = $id ORDER BY img_id DESC LIMIT 1";
      $id_img = $connection->query($sqlimg);
      $img_ar = mysqli_fetch_assoc($id_img);
      $img_ar_id = $img_ar['img_id'];

      if ($img_ar_id) {
        setcookie("idimg", $img_ar_id);
      } else {
        setcookie("idimg", 0);
      }

      $connection->close();
      include_once "controllers/ctwig.php";

      $modulServer = "vrvhodobrabotka";

      $twi = new Ctwig ($modulServer);
      $twi->contr($modulServer,$login);


      echo 'Регистрация прошла успешно!'."<br>";
      
      include_once "views/traitFooter.php";

    } else {
      echo 'Неверный логин или пароль!'."<br>";
      echo "<a href='glvhod'><strong>Назад</strong></a>"."<br>";
      $connection->close();
      exit();
    }

  }
}
