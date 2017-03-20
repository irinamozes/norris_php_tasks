<?php
//Контроллер для показа списков пользователей и их фотографий

class C extends ControllerParent {

  public function contr($modulServer) {

    if ($modulServer == 'spisok') {
      $dataAr[0] = 'users_profile';
      $dataAr[1] = 'age';
      $dataAr[3] = '';
      $dataAr[4] = 's';
    } elseif (substr_count($modulServer, 'spisokf')) {

      $id_polz = substr ( $modulServer, 8);

      $dataAr[3] = $id_polz;

      $dataAr[0] = 'images';
      $dataAr[1] = 'img_id';
      $dataAr[4] = 'f';

    } else {
      $id_img = substr ( $modulServer, 8);
      $dataAr[4] = 'i';
      $dataAr[0] = 'images';
      $dataAr[1] = '';
      $dataAr[3] = $id_img;

    }

    $viewRe = new View();
    $viewRe->getViewHeader($modulServer, $dataAr);

  }
}
?>
