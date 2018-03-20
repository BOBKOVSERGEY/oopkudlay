<?php

require_once __DIR__ . '/classes/FirstClass.php';

$objOne = new FirstClass();

$objTwo = new FirstClass();

echo '<pre>';
var_dump($objOne);
echo '</pre>';

echo '<pre>';
var_dump($objTwo);
echo '</pre>';