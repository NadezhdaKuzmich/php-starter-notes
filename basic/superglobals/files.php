<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get</title>
</head>

<body>
  <?php

  /*
  $_FILES
  Асоціативний масив елементів, завантажених у 
  поточний скрипт через метод HTTP POST.

  How to upload files:
  - Upload it to the root.
  - Directly to the database.

  Specifies how the form data should be encoded:
  => enctype="multipart/form-data"
  */

  if (isset($_FILES['file'])) {
    echo $name = $_FILES['file']['name'] . '<br>';
    echo $type = $_FILES['file']['type'] . '<br>';
    echo $tmp_location = $_FILES['file']['tmp_name'] . '<br>';
    echo $error = $_FILES['file']['error'] . '<hr>';
  } else {
    echo 'Choose some file...<hr>';
  }

  ?>
  <form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Submit</button>
  </form>
</body>

</html>