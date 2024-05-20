<?php

try {
  // $filename = 'data/template.txt';
  $filename = 'data/template.csv';
  $file = fopen($filename, 'r');

  if ($file == false) {
    echo 'Error in opening file!';
    exit();
  }

  $i = 0;
  while (!feof($file)) {
    // fgetcsv схожа на функцію fgets, з тією різницею, 
    // що вона здійснює аналіз рядка на наявність записів 
    // у форматі CSV і повертає знайдені поля як масив:
    $content[$i++] = fgetcsv($file);
    // $content[$i++] = fgetcsv($file, 1000, ",");
  }

  echo '<pre>';
  print_r($content);
  echo '</pre>';
  fclose($file);
} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}