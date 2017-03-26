<?php
require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'ez-rider@yandex.ru';    //Логин
$mail->Password = 'rjhjktdf';                   //Пароль
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('ez-rider@yandex.ru');
$mail->isHTML(true);

$mail->Subject = 'Тема письма';
$mail->Body    = '<b>HTML</b> версия письма';
$mail->AltBody = 'Текстовая версия письма, без HTML тегов (для клиентов не поддерживающих HTML)';

// Добавляем адрес в список получателей
$mail->addAddress('ez-rider@yandex.ru');
//Отправка сообщения
if(!$mail->send()) {
    echo 'Ошибка при отправке. Ошибка: ' . $mail->ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено';
}
