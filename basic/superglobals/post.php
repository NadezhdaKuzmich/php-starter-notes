<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name">
    <input type="number" name="age">
    <button type="submit">Submit</button>
  </form>
  <?php

  /*
  $_POST
  Асоціативний масив даних, переданих скрипту через HTTP методом 
  POST у разі використання application/x-www-form-urlencoded або 
  multipart/form-data в заголовку Content-Type запиту HTTP.

  - Collect data from HTMl form (invisible).
  */

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    if (!empty($name)) {
      echo $_POST['name'] . ', your form is submitted!';
    }
  }

  if (count($_POST)) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }

  ?>
</body>

</html>