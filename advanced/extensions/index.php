<?php

/*
Розширення дають змогу збільшувати функціональність скрипта за лічені хвилини.
Щоб використовувати функції бібліотек, достатньо зайти на офіційну документацію 
php.net. В інтернеті безліч прикладів інтеграцій між розширеннями і є готові 
рішення. Щоб встановити розширення, достатньо знати, як у вашому середовищі 
ставляться пакети. Наприклад, через sudo apt-get або sudo yum.

Серед модулів є багато написаних розробниками, але не протестованих. Тому слід 
обережно ставити сторонні. Видалити розширення можна також командою через консоль 
або термінал.

Модуль Hash дає змогу хешувати пароль або іншу важливу інформацію, застосовуючи 
багато алгоритмів. Наприклад, md5 або sha256, які все ще популярні.

Отримати всі розширення:
- звичайний список 
php -m

- детальний список
php -i

- у вигляді масиву
php -r
"print_r(get_loaded_extensions());"
*/

// hash usage
$num = 5;
echo hash('md5', $num);
echo '<hr>';

// Date usage
$today = getdate();
echo "<pre>";
print_r($today);
echo "</pre>";
echo '<hr>';

// CURL usage
$url = 'https://www.example.com';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);

$data = curl_exec($curl);
// echo "<pre>", var_dump($data), "</pre>";
curl_close($curl);

// mb_parse_str usage
$str = 'email=kehaovista@qq.com&city=shanghai&job=Phper';
mb_parse_str($str, $result);
echo '<pre>';
print_r($result);
echo '</pre>';