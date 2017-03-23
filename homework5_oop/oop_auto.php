<?php

class Engine {
  const temperCooling = 10;

  public function coolingEngine(){
    return self::temperCooling;
  }

}

class Move {
  //private $engine;
  public $temperBegin;
  public $distance;

  const speedone = 2;
  const pathone = 10;
  const temperone = 5;
  const tempermax = 90;


  public function moveCar(Engine $engine, $temperBegin, $distance) {

    echo "Дистанция ".  $distance ."м" ."<br>";

    $n = (int) ( $distance  / 10 );
    $distance = $n * 10;

    echo "<br>"."<strong>Движение</strong>"."<br>";
    echo "Первоначальная температура двигателя: ".  $temperBegin ."град."."<br>";


    $temp = $temperBegin;
    for ($x = 1; $x <= $n; $x++) {
      $temp = $temp + self::temperone;
      if ($temp > self::tempermax - 5 ) {

        $temp = $temp - $engine->coolingEngine();
        echo "Охлаждение. ";
      }
      echo "Расстояние ".  $x * 10 ."м. " ;
      //$tempCool = $temperBegin - $engine->coolingEngine();
      echo "Температура стала ".  $temp ."град."."<br>";
    }

  }

}

//reverse motion

trait Reverse {

    public function reverseMotione() {
      echo "Режим езды назад" ."<br>";
    }
}


class TransmissionManual {
  use Reverse;
  protected $speedCondition;

  public function __construct($speedCondition) {

    $this->speedCondition = $speedCondition;

  }

  public function movingForward(){
    if ( $this->speedCondition <= 20 ){
      echo "Используется передача №1" ."<br>";
    } else {
    echo "Используется передача №2" ."<br>";
    }
  }
}

class TransmissionAuto {
  use Reverse;

  public function movingForward(){
    echo "Режим езды вперед" ."<br>";
  }

}

class Car extends Move {

  // описание дополнительных полей и методов
  const TransmissionAuto = 'TransmissionAuto';
  const TransmissionManual = 'TransmissionManual';
  const Forward = 3;
  const Reverse = 4;

  private $nameCar;
  private $horsepower;
  private $speed;

  private $transmission;
  private $direction;

  public function __construct($nameCar, $horsepower, $speed, $transmission, $direction) {
    $this->nameCar = $nameCar;
    $this->horsepower = $horsepower;
    $this->speed = $speed;
    $this->transmission = $transmission;
    $this->direction = $direction;

    echo "<strong>Характеристики автомобиля</strong>"."<br>";
    echo $this->nameCar ."<br>";
    echo "Кол-во лошадиных сил: ".$this->horsepower ."<br>";
    $this->speed = ($speed<=($this->horsepower*Move::speedone)) ? $speed : ($this->horsepower*Move::speedone);
    echo "Скорость: ".$this->speed ."м/с" ."<br>";
    echo "Трансмиссия: ".$this->transmission ."<br>";

  }

  public function chooseTransmission() {

    echo "<br>"."<strong>Характеристики движения</strong>"."<br>";

    if ( $this->transmission == self::TransmissionAuto){

      $trans = new TransmissionAuto();
    }

    if ( $this->transmission == self::TransmissionManual ){

      $speedCond = $this->speed;
      $trans = new TransmissionManual($speedCond);
    }

    if ( $this->direction == self::Forward ){
      echo "Едем вперед" ."<br>";
      $trans->movingForward();
    } else {
      echo "Сдаем назад" ."<br>";
      $trans->reverseMotione();
    }

  }
}

$cEngine = new Engine();

$cCar = new Car('NIVA', 50, 120, Car::TransmissionManual, Car::Forward);
$cCar->chooseTransmission();

$cCar->moveCar($cEngine, -3, 320);

?>
