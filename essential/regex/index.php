<?php

/*
Функції регулярних виразів:
preg_match() 
- Виконує перевірку на відповідність регулярному виразу.
preg_match_all() 
- Виконує глобальний пошук шаблону в рядку. 
preg_quote() 
- Екранує символи в регулярних виразах. 
preg_replace() 
- Виконує пошук і заміну за регулярним виразом. 
preg_split() 
- Розбиває рядок за регулярним виразом.

Конфіг регулярних виразів:
\ Скасовує (екранує) спеціальне значення метасимволу, що слідує за ним.
. Будь-який одиночний символ, крім символу нового рядка. Будь-який 
одиночний символ, включно із символом нового рядка, якщо в операції 
зіставлення зі зразком задано прапор s.
^ Позначає початок рядка, якщо є першим символом зразка.
$ Позначає кінець рядка, якщо є останнім символом зразка.
| Розділяє альтернативні варіанти.
[...] Будь-який одиночний символ із числа перелічених у квадратних дужках. 
Пара символів, розділених знаком мінус, задає діапазон символів. Наприклад, 
[A-Za-z] задає всі великі та малі літери англійського алфавіту. Якщо першим 
символом у дужках є символ ^, уся конструкція позначає будь-який символ, що 
не входить до числа перелічених у дужках. Усередині дужок символи . * [ і \ 
втрачають своє спеціальне значення.
(...) Групування елементів зразка в один елемент.
* Нуль і більше повторень регулярного виразу, що стоїть безпосередньо перед *.
+ Одне або більше повторень регулярного виразу, що стоїть безпосередньо перед +.
? Одне або жодного повторення регулярного виразу, що стоїть безпосередньо перед ?. 
{n, m} Мінімальна n і максимальна m кількість повторень регулярного виразу, що 
стоїть перед {n, m}.
Конструкція {n} означає рівно n повторень, {n,} - мінімум n повторень.


Опис метасимволів:
\d - Знайти будь-які цифри.	
\D - Знайти будь-які нецифрові символи.	
\s - Знайти будь-який пробіл.
\S - Знайти будь-який не пробільний символ.
\w - Знайти будь-яку літеру алфавіту (від a до Z) та цифру (від 0 до 9).	
\W - Знайти будь-який неалфавітний та нецифровий символ.
\b - Знайти збіг на початку такого слова: \bWORD, або в кінці слова на зразок 
цього: WORD\b	
\uxxxx - Знайти символ Unicode, заданий шістнадцятковим числом xxxx.

Конфіг регулярних виразів:
i - не розрізняти малі та великі літери.
m - вважати рядок багаторядковим.
s - однорядковий рядок.
x - розширений синтаксис (використання пробілів і коментарів).

Приклади регулярних виразів
- приклад - рядок "приклад";
- ^приклад - рядок починається з "приклад";
- приклад$ - рядок закінчується на "приклад";
- ^приклад$ - "приклад" зустрічається в рядку тільки один раз.
- [abc] - a, b, або c.
- [a-z] - будь-який символ у нижньому регістрі в діапазоні від a до z.
- [^A-Z] - будь-який символ, що не перебуває у верхньому регістрі в діапазоні 
від A до Z.
- (png|txt) - означає як "png" так і "txt".
- [a-z]+ - один або більше символів нижнього регістру.
- [0-9.-] - будь-яка цифра, крапка або знак мінус.
- ^[a-zA-Z0-9_]{1,}$ - будь-яке слово, хоча б одна буква, число або _.
- (^A-Za-z0-9) - будь-який символ, який не число і не буква.
- ([A-Z]{3}|[0-9]{4}) - три літери або 4 цифри.
*/

$str = "PHP Regular Expressions";
$pattern = "/php/i";
echo preg_match($pattern, $str) . '<hr>';

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str) . '<hr>';

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str) . '<hr>';

$str = "Frontend Developer";
$pattern = "/frontend/i";
echo preg_replace($pattern, "Fullstack", $str) . '<hr>';

$pattern = "/[\s,]+/";
$text = "My favourite colors are purple, green and yellow.";
$parts = preg_split($pattern, $text);

foreach ($parts as $part) {
  echo $part . "<br>";
}
echo '<hr>';

$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);

foreach ($matches as $match) {
  echo $match . "<br>";
}