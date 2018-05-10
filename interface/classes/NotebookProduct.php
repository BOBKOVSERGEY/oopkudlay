<?php

class NotebookProduct extends Product
{
  public $cpu;

  // наследует конструктор родительского класса  + можно дописать свои
  public function __construct($name, $price, $cpu)
  {
    parent::__construct($name, $price);

    // + добавили свое свойство
    $this->cpu = $cpu;
  }

  // переопределяем метод getProduct

  public function getProduct()
  {
    $out =  parent::getProduct();
    $out .= "Процессор: {$this->cpu}<br>";

    return $out;

  }

  public function getCpu()
  {
    return $this->cpu;
  }

}