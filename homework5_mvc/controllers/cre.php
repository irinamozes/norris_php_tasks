<?php
//Контроллер для показа форм регимстрации и редактирования

class C extends ControllerParent {

  public function c($modulServer) {
    static $counter = 0;
    $cou = ++$counter;

    if ($cou <= 1) {

      include 'models/mre.php';
      $data = new ModelDataRe();
      $data->modelDataRe();
      $dataAr = $data->arData;

      $viewRe = new View();
      $viewRe->getViewHeader($modulServer, $dataAr);

    } else {
        exit();
    }
  }
}
?>
