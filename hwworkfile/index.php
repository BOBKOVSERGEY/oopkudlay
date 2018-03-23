<?php

require_once __DIR__ . '/classes/File.php';

// создаем экземпляр класса
$file = new File(__DIR__ . '/file.txt');

$file->write('строка 1');
$file->write('строка 2');
$file->write('строка 3');
$file->write('строка 4');
$file->write('строка 5');