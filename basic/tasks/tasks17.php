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

// task 3
$filename = "data/test.txt";

echo "<b>Task 3:</b><br>";
try {
  $lineCount = 0;
  $fileHandle = fopen($filename, 'r');

  if ($fileHandle === false) {
    throw new Exception("Error opening the file.");
  }

  // feof - визначає, чи досягнуто кінця файлу:
  while (!feof($fileHandle)) {
    // fgets - зчитує і повертає рядок із файлу:
    $line = fgets($fileHandle);

    if ($line !== false) {
      $lineCount++;
    }
  }

  fclose($fileHandle);
  echo "Number of lines in the file: " . $lineCount;
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
}
echo "<hr>";

// task 4
function writeToFile($filename, $content)
{
  try {
    $fileHandle = fopen($filename, 'w');

    if ($fileHandle === false) {
      throw new Exception("Error opening the file for writing.");
    }

    // fwrite - виконує запис рядка в зазначений файл:
    fwrite($fileHandle, $content);
    fclose($fileHandle);
    echo "Content written to the file successfully.";
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
  }
}

echo "<b>Task 4:</b><br>";
$filename = "data/example.txt";
$content = "PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.";
writeToFile($filename, $content);
echo "<hr>";

// task 5
$oldFilename = "data/example.txt";
$newFilename = "data/new_example.txt";

echo "<b>Task 5:</b><br>";
try {
  if (file_exists($oldFilename)) {
    // rename - перейменовує файл або директорію:
    if (rename($oldFilename, $newFilename)) {
      echo "File renamed successfully.";
    } else {
      throw new Exception("Error renaming the file.");
    }
  } else {
    throw new Exception("File does not exist.");
  }
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
}
echo "<hr>";

// task 6
function copyFile($sourceFile, $destinationFile)
{
  try {
    if (!file_exists($sourceFile)) {
      throw new Exception("Source file does not exist.");
    }

    // copy - копіює файл. Якщо копіювання виконується вдало, 
    // повертає значення True. Якщо копіювання не виконалося, 
    // поверне значення False:
    if (!copy($sourceFile, $destinationFile)) {
      throw new Exception("Error copying the file.");
    }

    echo "File copied successfully.";
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
  }
}

$sourceFile = "data/test.txt";
$destinationFile = "data/new-data/test.txt";

echo "<b>Task 5:</b><br>";
copyFile($sourceFile, $destinationFile);
echo "<hr>";