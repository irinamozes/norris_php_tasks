<?php
//class View для показа шаблонов представлений всех динамических страниц

class View {

  public function getViewHeader($modulServer, $dataAr = NULL) {
    //$template = $modulServer .'Header'.'.php';
    //include $template;
    include 'views/'.'generalHeader.php';
  }


  public function getViewFooter($modulServer) {
    $template = 'views/'.$modulServer .'Footer'.'.php';
    include $template;
  }
}


?>
