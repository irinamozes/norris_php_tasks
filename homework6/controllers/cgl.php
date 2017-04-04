<?php
//Контроллер для показа главной страницы, формы входа и формы письма

class C extends ControllerParent {

  public function contr($modulServer) {

    $this->viewGlav = new View();
    if ($modulServer == 'glavnaya') {

      setcookie("iduser", 0);
      setcookie("idimg", 0);
      setcookie("login", '');
      setcookie("vhod", 'vihod');
      $this->viewGlav->getViewFooter($modulServer);

    } else { // vhod, post

      //echo "string";
      $this->viewGlav->getViewHeader($modulServer);
    }

  }
}
