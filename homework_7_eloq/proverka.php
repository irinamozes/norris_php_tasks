<?php
//проверяет существует ли еще залогиневшийся пользователь/
error_reporting (E_ALL);

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;

require_once "models/mgeneralModel.php";

if ($_COOKIE['iduser']) {

  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'loft_dbe',
      'username'  => 'root',
      'password'  => '123',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);


  // Make this Capsule instance available globally via static methods... (optional)
  $capsule->setAsGlobal();

  // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
  $capsule->bootEloquent();

  $proverkaId = $_COOKIE['iduser'];
  //$sql = "SELECT * FROM users_login where user_id = $proverkaId";
  //$id_log = $connection->query($sql);
  //$rowid = mysqli_fetch_array($id_log);

  $polz = User::where('id', '=', $proverkaId)->first();

  if (!$polz) {

    setcookie("iduser", 0);
    setcookie("idimg", 0);
    setcookie("login", '');
    setcookie("vhod", 'vihod');
    echo "Такого пользователя не существует. Возможно, он был удален.";
    echo "<br>"."<a href='glavnaya'><strong>Выход</strong></a>"."<br>";
    exit();
  }
  //$connection->close();

} else {
    //echo "Дальше";
}
