<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Form</title>
</head>

<body>
  <!-- <form action="user.php" method="GET"> -->
  <!-- <form action="user.php" method="POST"> -->
  <!-- <form action="index.php" method="POST"> -->
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <label>
      Username: <br />
      <input type="text" name="username">
    </label>
    <br />
    <label>
      Password: <br />
      <input type="password" name="password">
    </label>
    <br />
    <input type="submit">
  </form>

  <?php

  function validate($data)
  {
    // - trim - призначена для видалення пропусків або інших символів, 
    // заданих другим аргументом, з початку і кінця рядка.
    // - stripslashes - видаляє символи екранування.
    // - htmlspecialchars - використовується для запобігання атакам XSS 
    // (Cross-Site Scripting) шляхом перетворення спеціальних символів 
    // HTML у їхні відповідні HTML-сутності. Це дає змогу безпечно 
    // відображати користувацьке введення в HTML-документах, уникаючи 
    // інтерпретації цих даних як HTML-коду
    $data = trim(stripslashes(htmlspecialchars($data)));
    return $data;
  }

  // if (isset($_POST['username'])) {
  // only work for POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    echo '<hr>';

    if (empty($_POST['username'])) {
      echo 'User name is empty!';
    } else {
      echo "Nice to meet you, $username!";
    }

    echo '<br>';

    if (empty($_POST['password'])) {
      echo 'Password is empty!';
    }
  }

  ?>

</body>

</html>