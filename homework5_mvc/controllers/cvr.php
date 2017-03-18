<?php
//Контроллер для обработки регимстрации,редактирования и входа

class C extends ControllerParent {

  public function c($modulServer) {
    static $counter = 0;
    $cou = ++$counter;
    if ($cou <= 1) {
      include 'models/'.'m'.$modulServer.'.php';
      $model = new Model();
      $model->model();
      $model->generalFooter();

    }
  }
}
?>
