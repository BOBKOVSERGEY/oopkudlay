<?php

class File
{
  public $fp;
  public $file;

  // принимает наименование самого файла
  public function __construct($file)
  {
    $this->file = $file;

    if (!is_writable($this->file)) {
      echo "Файл {$this->file} не доступен для записи";
      exit();
    }

    // открываем файл
    $this->fp = fopen($this->file, 'a');
  }

  public function __destruct()
  {
    // закрываем файл
    fclose($this->fp);
  }

  // принимаю строку для записи
  public function write($text)
  {
    if (fwrite($this->fp, $text . PHP_EOL) === FALSE) {
      echo "Не могу произвести запись в файл {$this->file}";
      exit();
    }
  }
}