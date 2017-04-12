<?php
//Контроллер для показа форм регимстрации, редактирования и письма

class C extends ControllerParent {

  public function contr($modulServer) {

    $modelmin = substr ( $modulServer, 0, 4 );
    $mod = 'm'.$modelmin.'.php';

    include 'models/'. $mod;
    $data = new ModelData();
    $data->model();
    //$dataAr = $data->arData;


    $viewRe = new View();

    $viewRe->getViewHeader($modulServer, $data->arData);


  }
}
?>
