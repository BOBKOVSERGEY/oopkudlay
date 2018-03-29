<?php
require_once __DIR__ . '/classes/Car.php';

// обращение к статическому свойству за пределами класса
print "Количество автомобилей: " . Car::$countCar;
print '<br>';
print '<br>';
$carOne = new Car('WV', 'brown', 4, 240);

print '<br>';
print '<br>';
// обращение к статическому свойству за пределами класса
print "Количество автомобилей: " . Car::$countCar;

$carTwo = new Car('Volvo', 'blue', 5, 260);
print '<br>';
print '<br>';
// обращение к статическому свойству за пределами класса
print "Количество автомобилей: " . Car::$countCar;

print '<br>';
print '<br>';
print '<br>';
// обращение к статическому методу за пределами класса
print "Общее количество автомобилей: " . Car::getCount();