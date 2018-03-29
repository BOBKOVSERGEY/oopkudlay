<?php

class Car
{
  public $brand;
  public $color;
  public $wheels = 4;
  public $speed = 240;

  // статическое свойство создается для работы в классе
  public static $countCar = 0;

  // добавляем константу, константы принадлежать классу
  const TEST_CAR = 'Прототип';
  const TEST_CAR_SPEED = 300;

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

  public function getPrototypeInfo()
  {
    echo "<h3>Данные тестового авто:</h3>
            Наименование: " . self::TEST_CAR
            . "<br>Скорость: " . self::TEST_CAR_SPEED . "<br>";
  }

}