<?php

error_reporting(-1);

//use classes\BookProduct;
use classes\interfaces\IGadget;
//use classes\NotebookProduct;

// группировка в php 7
use classes\{BookProduct, NotebookProduct};

function autoloader($class)
{
  $class = str_replace("\\", '/', $class);

  $file = __DIR__ . "/{$class}.php";



  if (file_exists($file)) {
    require_once $file;
  }
}

function autoloaderTwo($class)
{
  $file = __DIR__ . "/interfaces/{$class}.php";
  if (file_exists($file)) {
    require_once $file;
  }
}

spl_autoload_register('autoloader');
spl_autoload_register('autoloaderTwo');

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

//var_dump($notebook instanceof IGadget);

offerCase($notebook);
//offerCase($book);

debug($book);

echo $book->getProduct();

class A{};
class B extends A{};
class C{};

$a = new A;
$b = new B;
$c = new C;

var_dump($b instanceof A);