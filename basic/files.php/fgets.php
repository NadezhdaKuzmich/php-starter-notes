<?php

try {
  $filename = 'data/template.txt';
  $file = fopen($filename, 'r');

  if ($file == false) {
    echo 'Error in opening file!';
    exit();
  }

  $i = 0;
  // feof - визначає, чи досягнуто кінця файлу:
  while (!feof($file)) {
    // fgets - зчитує і повертає рядок із файлу:
    $content[$i++] = fgets($file);
  }

  echo '<pre>';
  print_r($content);
  echo '</pre>';
  fclose($file);
} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}