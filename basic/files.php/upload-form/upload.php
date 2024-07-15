<?php

$targetDir = 'uploads/';
$targetFile = $targetDir . basename($_FILES['uploadingFile']['name']);

$uploadStatus = 1;

$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {
  $check = getimagesize($_FILES['uploadingFile']['tmp_name']);

  if ($check === false) {
    echo 'Not an image.';
    $uploadStatus = 0;
  } else {
    echo 'File is an image - ' . $check['mime'];
    $uploadStatus = 1;
  }

  echo '<br>';
}

if (file_exists($targetFile)) {
  echo 'Sorry, the file already exists.<br>';
  $uploadStatus = 0;
}

if ($_FILES['uploadingFile']['size'] > 200000) {
  echo 'File is too large, please choose a smaller image.<br>';
  $uploadStatus = 0;
}

if ($imageFileType !== 'jpg' && $imageFileType !== 'jpeg' && $imageFileType !== 'png') {
  echo 'Not a valid image type, must be jpg, jpeg or png. Please try again.<br>';
  $uploadStatus = 0;
}

if ($uploadStatus === 0) {
  echo 'File was not uploaded, please try again.';
} else {
  if (move_uploaded_file($_FILES['uploadingFile']['tmp_name'], $targetFile)) {
    echo 'The file ' . basename($_FILES['uploadingFile']['name']) . ' has been successfully uploaded.';
  } else {
    'There was an error uploading your file.';
  }
}