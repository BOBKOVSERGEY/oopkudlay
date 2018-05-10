<?php

class Product
{
  public $name;
  public $price;

  public $public = 'PUBLIC'; // публичный, доступен везде
  protected $protected = 'PROTECTED'; // зашишенный, доступен где объявлен и в класах наследниках, вне класса не доступен
  private $private = 'PRIVATE'; // закрытый, доступен только внутри объявленного класса

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }


  public function getProduct()
  {
    $out = "<hr><strong>О товаре:</strong><br>
            Наименование: {$this->name}<br>
            Цена: {$this->price}<br>";
    return $out;
  }

  public function getName()
  {
    return $this->name;
  }


  public function getPrice()
  {
    return $this->price;
  }

}