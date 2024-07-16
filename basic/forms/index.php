<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Form</title>
  <style>
    .error {
      font-size: 12px;
      color: red;
    }
  </style>
</head>

<body>

  <?php

  /* 
  GET stores data in the URL, which is typically limited to about two thousand 
  characters depending on the browser used, whereas POST hides the data, making 
  it more secure. POST is best for sensitive or vital data such as usernames and 
  passwords, whereas GET is best for bookmarking data and URLs that are not vital 
  or sensitive.
  */

  $data = [
    'email' => '',
    'username' => '',
    'password' => ''
  ];
  $errors = [
    'email' => '',
    'username' => '',
    'password' => ''
  ];
  $msg = '';

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
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $email = validate($data['email']);
    $username = validate($data['username']);
    $password = validate($data['password']);

    if (empty($email)) {
      $errors['email'] = 'Email is empty!';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'This is an invalid email address!';
    }

    if (empty($username)) {
      $errors['username'] = 'Username is empty!';
    } else if (!preg_match('/^[a-zA-Z ]*$/', $username)) {
      $errors['username'] = 'Only letters and whitespace are allowed!';
    }

    if (empty($password)) {
      $errors['password'] = 'Password is empty!';
    } else if (strlen($password) < 8) {
      $errors['password'] = 'The password must contain at least 8 characters!';
    }

    if (!($errors['email'] || $errors['username'] || $errors['password'])) {
      $msg = "<hr> Nice to meet you, $username!";

      foreach ($data as $key => $value) {
        $data[$key] = '';
      }
    }
  }

  ?>

  <!-- <form action="user.php" method="GET"> -->
  <!-- <form action="user.php" method="POST"> -->
  <!-- <form action="index.php" method="POST"> -->
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <label>
      Email: <br />
      <input type="text" name="email" value="<?php echo $data['email'] ?>">
    </label>
    <div class="error"><?php echo $errors['email'] ?></div>
    <label>
      Username: <br />
      <input type="text" name="username" value="<?php echo $data['username'] ?>">
    </label>
    <div class="error"><?php echo $errors['username'] ?></div>
    <label>
      Password: <br />
      <input type="password" name="password" value="<?php echo $data['password'] ?>">
    </label>
    <div class="error"><?php echo $errors['password'] ?></div>
    <input type="submit">
  </form>
  <?php echo $msg ?>

</body>

</html>