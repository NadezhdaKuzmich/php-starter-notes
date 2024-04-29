<?php

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $name = $_FILES['file']['name'];           // Find file name
  $tmp_name = $_FILES['file']['tmp_name'];   // Temp loc
  $size = $_FILES['file']['size'];           // Find file size
  $error = $_FILES['file']['error'];         // Find errors

  // explode from punctuation mark
  // explode - розбиває рядок у масив за певним роздільником.
  $tempExtension = explode('.', $name);

  // end - зсуває внутрішній покажчик масиву array на останній елемент 
  // і повертає його значення.
  $fileExtension = strtolower(end($tempExtension));

  // Allowed extensions
  $isAllowed = ['jpg', 'jpeg', 'png', 'pdf'];

  // in_array - перевіряє наявність заданого елемента в масиві. Першим 
  // параметром вона приймає що шукати, а другим - у якому масиві.
  if (in_array($fileExtension, $isAllowed)) {
    // 0 = no error | 1 = error
    if ($error === 0) {
      if ($size < 100000) {
        // uniqid повертає унікальний ідентифікатор із префіксом 
        // на основі поточного часу в мікросекундах.
        $newFileName = uniqid('', true) . ".$fileExtension";
        $fileDestination = "uploads/$newFileName";

        // move_uploaded_file - переміщує завантажений файл у нове місце.
        move_uploaded_file($tmp_name, $fileDestination);

        // header - викликають для надсилання HTTP-заголовка.
        header("Location: files.php?uploadedsuccess");
      } else {
        echo 'Sorry, your file size is too big!';
      }
    } else {
      echo 'Sorry, there was an error! Try it again.';
    }
  } else {
    echo 'Sorry, your file type is not accepted.';
  }
}