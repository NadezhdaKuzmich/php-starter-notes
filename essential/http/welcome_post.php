<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome POST</title>
</head>

<body>
  <h2>Welcome,
    <?php echo $_POST["name"]; ?>!
  </h2>
  <p>Your email address is:
    <?php echo $_POST["email"]; ?>
  </p>
</body>

</html>