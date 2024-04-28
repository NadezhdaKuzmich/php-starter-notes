<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get</title>
</head>

<body>
  <form action="get.php" method="get">
    <input type="text" name="name">
    <input type="number" name="age">
    <button type="submit">Submit</button>
  </form>
  <?php

  /*
  $_GET
  Асоціативний масив змінних, переданих скрипту через параметри URL 
  (відомі також як рядок запиту). Зверніть увагу, що масив не тільки 
  заповнюється для GET-запитів, а скоріше для всіх запитів із рядком 
  запиту.
  
  - Data will be visible in the URL.
  */

  if (isset($_GET['name'])) {
    echo $_GET['name'] . ', your form is submitted!';
  }

  ?>
</body>

</html>