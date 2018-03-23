<?php

class Car
{
  public $brand;
  public $color;
  public $wheels = 4;
  public $speed = 240;

  // метод срабатывает при создании объекта
  public function __construct($brand, $color, $wheels, $speed)
  {
    $this->brand = $brand;
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;

    echo "<h3>О маем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Количество колес: {$this->wheels}<br>
            Скорость: {$this->speed}";
  }

  // метод срабатывает при уничтожении объекта

  public function __destruct()
  {
    echo '<pre>';
    var_dump($this);
    echo '</pre>';
  }

}