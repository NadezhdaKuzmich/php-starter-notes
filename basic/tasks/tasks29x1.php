<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Leap Year</title>
</head>

<body>
  <form method="post">
    Enter the Year: <input type="text" name="year">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  if ($_POST) {
    $year = $_POST['year'];
    if (!is_numeric($year)) {
      echo "Strings are not allowed, input should be a number";
      return;
    }
    if (($year % 4 === 0) and ($year % 100 !== 0) or ($year % 400 == 0)) {
      echo "$year is a Leap Year";
    } else {
      echo "$year is not a Leap Year";
    }
  }
  ?>

</body>

</html>