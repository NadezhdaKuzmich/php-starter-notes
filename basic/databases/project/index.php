<?php
require_once 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $sql = 'SELECT * FROM users';
  // $sql = 'SELECT * FROM users WHERE id = 1';
  // $sql = 'SELECT * FROM users WHERE id = 3';  // No results found.


  // mysqli_query виконує запит query до бази даних.
  $result = mysqli_query($conn, $sql);

  // mysqli_num_rows повертає число рядів у результуючій вибірці.
  $rowCount = mysqli_num_rows($result);

  if ($rowCount) {
    // mysql_fetch_assoc - обробляє ряд результату запиту 
    // і повертає асоціативний масив.
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['id'] . '. ' . $row['username'] . '<br>';
    }
  } else {
    echo 'No results found.';
  }
  ?>
</body>

</html>