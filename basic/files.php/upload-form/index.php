<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Click to select image to upload:
      <input type="file" name="uploadingFile" id="uploadingFile">
    </label>
    <input type="submit" value="Upload Image" name="submit">
  </form>
</body>

</html>