<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $filePath = 'uploads/file.txt';
  // file_get_contents надає простий спосіб зчитування вмісту файлу у вигляді рядка.
  $output = file_get_contents($filePath);
  $ages = explode("\n", $output);
  $totalAge = 0;

  foreach ($ages as $age) {
    echo $age . '<br>';
    $totalAge += (int) $age;
  }

  echo '<hr>';
  echo 'The average age is ' . number_format($totalAge / count($ages), 2, '.');

  ?>
</body>

</html>