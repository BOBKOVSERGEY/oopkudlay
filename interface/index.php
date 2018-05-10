<?php
error_reporting(-1);
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/NotebookProduct.php';
require_once __DIR__ . '/classes/BookProduct.php';

// создаем экземпляр класса
$book = new BookProduct('Три мушкетера', '20', 448);

$notebook = new NotebookProduct('Dell', '1000', 'Intel');

echo '<pre>';
print_r($book);
echo '</pre>';
echo '<pre>';
print_r($notebook);
echo '</pre>';
echo $book->getProduct();
echo $notebook->getProduct();