<?php

/*
Список можливих режимів для fopen використовуючи mode:
- 'r'  - Відкриває файл тільки для читання; поміщає покажчик на початок файлу.
- 'r+' - Відкриває файл для читання і запису; поміщає покажчик на початок файлу.
- 'w'  - Відкриває файл тільки для запису; поміщає покажчик на початок файлу і 
обрізає файл до нульової довжини. Якщо файл не існує - пробує його створити.
- 'w+' - Відкриває файл для читання і запису; поміщає покажчик на початок файлу і
 обрізає файл до нульової довжини. Якщо файл не існує - намагається його створити.
- 'a'  - Відкриває файл тільки для запису; поміщає покажчик у кінець файлу. Якщо 
файл не існує - намагається його створити. У цьому режимі функція fseek не працює, 
записи завжди додаються.
- 'a+' - Відкриває файл для читання і запису; поміщає покажчик у кінець файлу. Якщо 
файл не існує - намагається його створити. У цьому режимі функція fseek впливає
 тільки на місце читання, записи завжди додаються.
- 'x'  - Створює і відкриває тільки для запису; поміщає покажчик на початок файлу. 
Якщо файл уже існує, виклик fopen закінчиться невдачею, поверне FALSE і видасть 
помилку рівня E_WARNING. Якщо файл не існує, спробує його створити. Це еквівалентно 
вказівці прапорів O_EXCL|O_CREAT для внутрішнього системного виклику open.
- 'x+' - Створює і відкриває для читання та запису; в іншому має таку саму 
поведінку, як і 'x'.
- 'c'  - Відкриває файл тільки для запису. Якщо файл не існує, то він створюється. 
Якщо ж файл існує, то він не обрізається (на відміну від 'w'), і виклик до цієї 
функції не спричиняє помилку (так само як і у випадку з 'x'). Покажчик на файл буде 
встановлено на початок файлу. Це може бути корисно при бажанні заблокувати файл 
(дивись flock) перед зміною, оскільки використання 'w' може обрізати файл ще до 
того, як було отримано блокування (якщо ви бажаєте обрізати файл, можна 
використовувати функцію ftruncate після запиту на блокування).
- 'c+' - Відкриває файл для читання і запису; в іншому має ту саму поведінку, що й 'c'.
*/

try {
  $filename = 'data/template.txt';

  // fopen - відкриває файл або URL:
  $file = fopen($filename, 'r');

  if ($file == false) {
    echo 'Error in opening file!';
    exit();
  }

  // filesize( шлях до файлу ) - повертає розмір файлу:
  $fileSize = filesize($filename);

  // fread - читає до length байт із файлового покажчика 
  // stream і зміщує покажчик. Читання зупиняється щойно 
  // було досягнуто однієї з таких умов:
  $fileText = fread($file, $fileSize);

  // fclose - закриває відкритий дескриптор файлу:
  fclose($file);

  echo "File size: $fileSize bytes";
  echo "<pre>$fileText</pre>";
} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}