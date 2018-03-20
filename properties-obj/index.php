<?php
require_once __DIR__ . '/classes/Car.php';

function debug($data)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

// создаем объект == экземпляр класса
$car = new Car();
$carOne = new Car();

//debug($car);
//debug($carOne);

$car->brand = 'BMW';
$car->color = 'black';
$car->speed = '200';


$carOne->brand = 'Volvo';
$carOne->color = 'red';
$carOne->speed = '240';

//debug($car);
//debug($carOne);

echo "<h3>О маем автомобиле:</h3>
Марка: {$carOne->brand}<br>
Цвет: {$carOne->color}<br>
Скорость: {$carOne->speed}<br>";
