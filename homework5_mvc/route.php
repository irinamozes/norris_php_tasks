<?php

class Route {

	//static function start() {
	public function start() {

    include 'config.php';

		require_once 'controllers/controllerParent.php';
		require_once 'views/view.php';
    require_once 'views/traitFooter.php';

	  $proc = $_SERVER['REQUEST_URI'];
		$proc = explode('/', $proc);
		$modul = $proc[$posBegin];

    if ($modul === 'index.php') {
			$modul = 'glavnaya';
		}

    $modulmin = substr ( $modul, 0, 2 );

    $controller = 'c'.$modulmin.'.php';

		include 'controllers/'.$controller;

    $cObject = new C($modul);
		$cObject->contr($modul);

  }
}

?>
