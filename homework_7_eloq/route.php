<?php

class Route {

		public function start() {

    error_reporting (E_ALL);
    //require_once 'config.php';

		require_once 'controllers/controllerParent.php';
		require_once 'views/view.php';

		$proc = $_SERVER['REQUEST_URI'];
		$procrev = strrev ( $proc );

    $_s = substr ($procrev, 0, 1);

		if ($_s === '/') {
			$modul = 'glavnaya';

		} else {

			$proc = explode('/', $proc);
			$procrev = array_reverse ( $proc );
			$modul = $procrev[0];

		}

		if ($modul === 'index.php') {
			$modul = 'glavnaya';
		}

		if ($modul === 'glavnaya') {
			setcookie("iduser", 0);
 		  setcookie("idimg", 0);
 		  setcookie("login", '');
			setcookie("vhod", 'vihod');
	 }

	 if ($modul === 'glvhod' || $modul === 'reregistraciya') {
		 setcookie("vhod", 'vhod');
	 }

		//В строках 46-54 - защита от перехода по истории браузера (стрелка влево) разлогиневшегося пользователя.
    if (isset ($_COOKIE['iduser'])) {
		  if ((!$_COOKIE['iduser'] && $modul == 'glpost') || (!$_COOKIE['iduser'] && $modul == 'reredactor') || (!$_COOKIE['iduser'] && $modul == 'spisok') ) {

			  $modul = 'glavnaya';
		  }

		  if (($_COOKIE['vhod'] == 'vihod' && $modul == 'vrvhodobrabotka') || ($_COOKIE['vhod'] == 'vihod' && $modul == 'vreobrabotka') || ($_COOKIE['vhod'] == 'vihod' && $modul == 'vrpostobrabotka')) {

			  $modul = 'glavnaya';
		  }
	  }

		$modulmin = substr ( $modul, 0, 2 );

    $controller = 'c'.$modulmin.'.php';

		include 'controllers/'.$controller;

    $cObject = new C($modul);
		$cObject->contr($modul);

  }
}
