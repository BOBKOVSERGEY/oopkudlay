<?php
require_once __DIR__ . '/classes/Car.php';

$carOne = new Car();

echo '<pre>';
print_r($carOne);
echo '</pre>';


$carOne->brand = 'WV';
$carOne->color = 'brown';
echo $carOne->getCarInfo();