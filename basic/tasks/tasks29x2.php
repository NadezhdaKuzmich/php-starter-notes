<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area of Rectangle</title>
</head>

<body>
  <h1>Calculate the area of rectangle</h1>
  <form method="post">
    Width: <input type="number" name="width">
    Length: <input type="number" name="length">
    <input type="submit" name="submit" value="Calculate"><br><br>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $width = $_POST['width'];
    $length = $_POST['length'];
    $area = $width * $length;
    echo "<b>The area of a rectangle with $width x $length is $area</b>";
  }
  ?>
</body>

</html>