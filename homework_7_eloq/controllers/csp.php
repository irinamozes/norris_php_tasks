<?php
//Контроллер для показа списков пользователей и их фотографий

class C extends ControllerParent {

  public function contr($modulServer) {

    if ($modulServer == 'spisok') {
      $dataAr[0] = 'profiles';
      $dataAr[1] = 'age';
      $dataAr[3] = '';
      $dataAr[4] = 's';
    } elseif (substr_count($modulServer, 'spisokf')) {

      $id_polz = substr ( $modulServer, 8);

      $dataAr[3] = $id_polz;

      $dataAr[0] = 'images';
      $dataAr[1] = 'id';
      $dataAr[4] = 'f';

    } else {
      $id_img = substr ( $modulServer, 8);
      $dataAr[4] = 'i';
      $dataAr[0] = 'images';
      $dataAr[1] = '';

      if ($id_img) {
        $dataAr[3] = $id_img;

      } else {
        $dataAr[3] = '';
      }


    }

    $viewRe = new View();
    $viewRe->getViewHeader($modulServer, $dataAr);

  }
}
?>
