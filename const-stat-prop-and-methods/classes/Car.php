<?php

class Car
{
  public $brand;
  public $color;
  public $wheels = 4;
  public $speed = 240;

  // статическое свойство создается для работы в классе
  public static $countCar = 0;

  // метод срабатывает при создании объекта
  public function __construct($brand, $color, $wheels, $speed)
  {
    $this->brand = $brand;
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;

    // обращение к статическому свойству внутри класса
    self::$countCar++ ;


    echo "<h3>О маем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Количество колес: {$this->wheels}<br>
            Скорость: {$this->speed}";
  }

  // счетчик автомобилей
  public static function getCount()
  {
    return self::$countCar;
  }

}