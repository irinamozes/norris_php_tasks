<?php
//Модель для обработки валидности ввода информации входа
require 'vendor/autoload.php';
class Model {

  public function mod($modulServer) {

      error_reporting (E_ALL);

      include_once "models/mrecapobrabotka.php";

      require_once "connect.php";
      $mail = new PHPMailer;

      if (isset($_POST) && $_POST['action'] == 'Отправить данные по назначению') {

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'msnorris2017@yandex.ru';                 // SMTP username
          $mail->Password = 'msnorris20';                           // SMTP password
          $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 465;

          $mail->setFrom('msnorris2017@yandex.ru');
          $mail->addAddress($_POST['address'], 'Ирина');

          $mail->Subject = $_POST['title'];
          $mail->Body = $_POST['email'];
          $mail->AltBody = $_POST['email'];

          if (!$mail->send()) {
              echo 'Письмо не отправлено.';
              echo 'Ошибка: ' . $mail->ErrorInfo;
              echo "<a href='glpost'><strong>Назад</strong></a>"."<br>";
          } else {
              echo 'Письмо отправлено';
              include_once "views/traitFooter.php";
          }
      }
   }
}
