<?php
//Контроллер для обработки регимстрации,редактирования и входа

class C extends ControllerParent {

  public function contr($modulServer) {

    include 'models/'.'m'.$modulServer.'.php';
    $model = new Model();
    $model->mod();
    $model->generalFooter();

  }
}
?>
