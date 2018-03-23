<?php

class Car
{
  public $brand;
  public $color;
  public $wheels = 4;
  public $speed = 240;

  public function getCarInfo()
  {
    return "<h3>О маем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Количество колес: {$this->wheels}<br>
            Скорость: {$this->speed}";
  }
}