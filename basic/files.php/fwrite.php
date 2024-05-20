<?php

try {
  $filename = 'data/new-template.txt';
  // $file = fopen($filename, 'w');
  $file = fopen($filename, 'a');

  if ($file == false) {
    echo 'Error in opening file!';
    exit();
  }

  fwrite($file, 'I love programming. ');
  fclose($file);
} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}

try {
  $filename = 'data/new-template.txt';
  $file = fopen($filename, 'r');

  if ($file == false) {
    echo 'Error in opening file!';
    exit();
  }

  $fileSize = filesize($filename);
  $fileText = fread($file, $fileSize);
  fclose($file);

  echo "File size: $fileSize bytes";
  echo "<pre>$fileText</pre>";
} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}