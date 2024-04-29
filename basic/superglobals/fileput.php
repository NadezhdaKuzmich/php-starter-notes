<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  /*
  Функція fopen призначена для відкриття файлу і повертає дескриптор файлу.
  
  fopen(
    string $filename,
    string $mode,
    bool $use_include_path = false,
    ?resource $context = null
    ): resource|false
  
  Функція fwrite записує дані у файл бінарно-безпечним способом.

  fwrite(
    resource $stream, 
    string $data, 
    ?int $length = null
    ): int|false

  Функція fclose закриває відкритий файл. У разі вдалого закриття 
  поверне True. Якщо закрити не вдалося, False.
  */

  // $myFile = fopen('uploads/file.txt', 'w');
  $myFile = fopen('uploads/file.txt', 'a');

  // $txt = "My name is Nadiia.\n";
  // fwrite($myFile, $txt);

  if (isset($_POST['submit'])) {
    $txt = 'My age is ' . $_POST['age'] . ".\n";
    fwrite($myFile, $txt);
  }

  echo $myFile;
  fclose($myFile);

  ?>

  <form action="fileput.php" method="post">
    <input type="number" name="age">
    <input type="submit" name="submit">
  </form>

</body>

</html>