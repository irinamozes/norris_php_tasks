<?php
//Контроллер для показа главной страницы и формы входа

class C extends ControllerParent {

  public function contr($modulServer) {

    setcookie("iduser", 0);
    setcookie("idimg", 0);
    $this->viewGlav = new View();
    if ($modulServer == 'glavnaya') {
      $this->viewGlav->getViewFooter($modulServer);

    } else { // vhod
      $this->viewGlav->getViewHeader($modulServer);
    }

  }
}

?>
