<?php

/*
- Атрибут action визначає шлях до обробника.
- Атрибут method визначає метод запиту.
- За замовчуванням у формі використовується метод GET.
- Параметри методу GET можна побачити і змінити в адресному рядку.

Методи надсилання даних форми:
Метод GET відправляє всю зібрану інформацію форми як частину URL.
Метод POST передає дані таким чином, що користувач сайту вже не 
бачить передані скрипту дані.

GET
- обмежений у розмірі
- передає параметри відкрито в посиланні
- зручний для користувацьких даних,
які не шкода
- один зі способів передати дані
крізь сторінки
- параметри лежать у масиві $_GET
- вразливий для впровадження інформації
користувачем
- легко скласти та надіслати в адресному
рядку

POST
- необмежений у розмірі
- передає параметри приховано в тілі
запиту
- зручний для передавання особистих даних 
- один зі способів передати дані
крізь сторінки
- параметри лежать у масиві $_POST
- невразливий для впровадження інформації
користувачем
- надсилання зазвичай відбувається сабмітом
форми

- За завантаження файлів на сервер через форму відповідає 
масив $_FILES.
- Налаштування на скачування зазвичай налаштовується 
заголовками.
- Надіслати файли через форму можна тільки з атрибутом 
enctype="multipart/formdata".
*/
?>

<!DOCTYPE html>
<html>

<body>

  <h2>POST method</h2>
  <form action="welcome_post.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>

  <h2>GET method</h2>
  <form action="welcome_get.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>

  <h2>File Upload</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
  </form>

</body>

</html>