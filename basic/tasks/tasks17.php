<?php

// task 1
$filename = "data/test.txt";

echo "<b>Task 1:</b><br>";
try {
  // file_get_contents - надає простий спосіб зчитування вмісту файлу у вигляді рядка:
  $fileContent = file_get_contents($filename);
  echo "File Contents: <br>";
  echo "<i>" . $fileContent . "</i>";
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
}
echo "<hr>";

// task 2
function checkFileExists($filePath)
{
  // file_exists - використовується для визначення того, існує файл чи ні:
  if (file_exists($filePath)) {
    echo "File exists at path: " . $filePath;
  } else {
    echo "File does not exist at path: " . $filePath;
  }
}

echo "<b>Task 2:</b><br>";
$filePath = "data/test.txt";
checkFileExists($filePath);
echo "<hr>";