<?php
require_once   'vendor/autoload.php';
include "config.php";

  $remoteIp = $_SERVER['REMOTE_ADDR'];
  $gRecaptchaResponse = $_REQUEST['g-recaptcha-response'];
  $recaptcha = new \ReCaptcha\ReCaptcha($secret);
  $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
  if ($resp->isSuccess()) {
   //echo "Успех, капча пройдена"."<br>";
  } else {
    echo "Что-то не так с reCAPTCHA"."<br>";
    //echo "Не получено ответа от reCAPTCHA";
    if ($modulServer == 'vrvhodobrabotka' ) {
      echo "<br>"."<a href='glvhod'><strong>Назад</strong></a>"."<br>";
    }

    if ($modulServer == 'vreobrabotka' ) {
      echo "<br>"."<a href='reregistraciya'><strong>Назад</strong></a>"."<br>";
    }
    if ($modulServer == 'vrpostobrabotka' ) {
      echo "<br>"."<a href='glpost'><strong>Назад</strong></a>"."<br>";
    }

    exit();
  }
