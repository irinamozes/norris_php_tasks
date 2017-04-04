<?php
//Родительский класс для всех контроллеров

class ControllerParent {
//$modulServer - основной параметр приложения - название файла с вызываемымы контроллером.

  protected $modulServer;

  public function __construct($modulServer) {

    $this->modulServer = $modulServer;

  }
}

?>
