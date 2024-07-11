<?php

/* readfile - reads a file and writes it to the output buffer: */
$file = readfile('data/test.txt');
echo "$file <hr>";

/* fread */
$file = fopen('data/test.txt', 'r');
$processed = fread($file, filesize('data/test.txt'));
fclose($file);

echo "$processed <hr>";

/* fgets - returns a line from an open file: */
$file = fopen('data/test.txt', 'r');

// feof - checks if the "end-of-file" (EOF) 
// has been reached for an open file:
while (!feof($file)) {
  echo fgets($file) . "<br>";
}

fclose($file);
echo "<hr>";

/* fgetc - returns a single character from an open file: */
$file = fopen('data/test.txt', 'r');

while (!feof($file)) {
  echo fgetc($file) . "<br>";
}

fclose($file);
echo "<hr>";

/* fseek - moves the file pointer from its current position to 
a new position, forward or backward, specified by the number of bytes: */
$file = fopen('data/test.txt', 'r');
fseek($file, 6);

while (($char = fgetc($file)) !== false) {
  if ($char == "\n") {
    break;
  }
  echo "$char <br>";
}

fclose($file);

/* fwrite */
$file = fopen('data/test2.txt', 'w');

fwrite($file, "Hello World!\n");
fwrite($file, "New line...\n");

fclose($file);