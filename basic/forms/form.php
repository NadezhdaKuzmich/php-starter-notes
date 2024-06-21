<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Form</title>
</head>

<body>
  <!-- <form action="user.php" method="GET"> -->
  <form action="user.php" method="POST">
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
</body>

</html>