<?php
//Модель для обработки валидности ввода информации входа
class Model {

  use GeneralFooter;

  public function mod() {

      error_reporting (E_ALL);
      require_once "connect.php";

      $sql = 'SELECT * FROM users_login';
      $result = $connection->query($sql);

      $id = 0;
      while ($row = mysqli_fetch_row($result)) {
        $lp = $row[0].$row[1];
        $lpv = strip_tags($_POST['login']). strip_tags($_POST['password']);
          if ($lpv == $lp){
            $id = $row[2];
          }
      }

      if ($id) {
        setcookie("iduser", $id);

        $sqlimg = "SELECT img_id FROM images where user_id = $id ORDER BY img_id DESC LIMIT 1";
        $id_img = $connection->query($sqlimg);
        $img_ar = mysqli_fetch_assoc($id_img);
        $img_ar_id = $img_ar['img_id'];

        setcookie("idimg", $img_ar_id);

        $connection->close();
        echo 'Регистрация прошла успешно!'."<br>";

      } else {
        echo 'Неверный логин или пароль!'."<br>";
        echo "<a href='glvhod'><strong>Назад</strong></a>"."<br>";
        $connection->close();
        exit();
      }
    
  }
}
?>
