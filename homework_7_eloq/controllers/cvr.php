<?php
//Контроллер для обработки регимстрации, редактирования, входа, отправки письма

class C extends ControllerParent {

  public function contr($modulServer) {

    include 'models/'.'m'.$modulServer.'.php';
    $model = new Model();
    $model->mod($modulServer);
    //$model->generalFooter();

  }
}
?>
