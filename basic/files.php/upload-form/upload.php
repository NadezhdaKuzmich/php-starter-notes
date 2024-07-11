<?php

$targetDir = 'uploads/';
$targetFile = $targetDir . basename($_FILES['uploadingFile']['name']);

$uploadStatus = 1;

$imageFiletype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

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

if ($uploadStatus === 0) {
  echo 'File was not uploaded, please try again.';
} else {
  if (move_uploaded_file($_FILES['uploadingFile']['tmp_name'], $targetFile)) {
    echo 'The file ' . basename($_FILES['uploadingFile']['name']) . ' has been successfully uploaded.';
  } else {
    'There was an error uploading your file.';
  }
}