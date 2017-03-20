<?php
//Контроллер для показа форм регимстрации и редактирования

class C extends ControllerParent {

  public function contr($modulServer) {

    include 'models/mre.php';
    $data = new ModelDataRe();
    $data->modelRe();
    $dataAr = $data->arData;

    $viewRe = new View();
    $viewRe->getViewHeader($modulServer, $dataAr);


  }
}
?>
