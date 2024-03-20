<?php

/*
Одинарні лапки
*/
echo '1. Це простий рядок';
echo '<br>';
// экранирование ' (одинарной кавычки)
echo '2. Якось Арнольд сказав: "I\'ll be back"';
echo '<br>';
// экранирование \ (обратного слеша)
echo '3. Ви впевнені, що хочете видалити папку "С:\system" ?';
echo '<br>';

/*
Подвійні лапки
*/
echo "<pre>";
$name = "Nadiia";
$secondName = "Kuzmich";
// You can use variables in your string (in ""):
echo "1. Привіт $name $secondName";
echo '<br>';
// You can use variables \n and so on:
echo "2. Приклад рядка,\n що охоплює кілька рядків.\n";
// экранирование " (двойной кавычки)
echo "3. Якось Арнольд сказав: \"I'll be back\"\n";
// экранирование $ (знака доллара)
echo "4. Ім'я зберігається у змінній \$name";
echo "</pre>";
echo '<br>';

$dog_name = "Tadpole";
$favorite_food = "treat";
$color = "brown";
echo "I have a {$color}ish dog named $dog_name and her favorite food is {$favorite_food}s.";

/*
Heredoc (like string in "")
*/
echo <<<LABEL
  Приклад тексту,
  що охоплює кілька рядків,
  з використанням Heredoc-синтаксису.
LABEL;
echo '<br>';

/*
Nowdoc (like string in '')
*/
echo <<<'LABEL'
  Приклад тексту,
  що охоплює кілька рядків,
  з використанням Nowdoc-синтаксису.
LABEL;
echo '<br><hr>';

// strlen - повертає довжину рядка.
echo strlen('Hello');
echo '<hr>';

// strpos - повертає позицію першого входження підрядка.
$mystring = 'abc';
$findme = 'a';
$pos = strpos($mystring, $findme);

// Зауважте, що використовується ===.  Використання == не дасть вірного 
// результату, оскільки 'a' знаходиться в нульовій позиції.
if ($pos === false) {
  echo "Рядок '$findme' не знайдено в рядку '$mystring'";
} else {
  echo "Рядок '$findme' знайдено в рядку '$mystring'";
  echo " у позиції $pos";
}
echo '<hr>';

// stripos - повертає позицію першого входження підрядка 
// без урахування регістру. На відміну від strpos(), ця 
// функція не враховує регістр символів.
$findme = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

if ($pos1 === false) {
  echo "Рядок '$findme' не знайдено в рядку '$mystring1'";
}
echo '<br>';

if ($pos2 !== false) {
  echo "Знайшов '$findme' у '$mystring2' у позиції $pos2";
}
echo '<hr>';

// substr - повертає підрядок.
$rest = substr("abcdef", -1);
echo $rest;
echo '<br>';
$rest = substr("abcdef", -2);
echo $rest;
echo '<br>';
$rest = substr("abcdef", -3, 1);
echo $rest;
echo '<hr>';

// explode - розбиває рядок за допомогою роздільника.
$pizza = "шматок1 шматок2 шматок3 шматок4 шматок5 шматок6";
$pieces = explode(" ", $pizza);
var_dump($pieces);
echo '<br>';
echo $pieces[0]; // шматок1
echo '<br>';
echo $pieces[1]; // шматок2
echo '<hr>';

// parse_str - розбиває рядок у змінні.
$str = "first=value&arr[]=foo+bar&arr[]=baz";

parse_str($str, $output);
echo $output['first'];  // value
echo '<br>';
echo $output['arr'][0]; // foo bar
echo '<br>';
echo $output['arr'][1]; // baz
echo '<hr>';

// str_repeat - повертає повторюваний рядок.
echo str_repeat("-=", 10);
echo '<hr>';

// substr_count - повертає число входжень підрядка.
$text = 'This is a test';

echo substr_count($text, 'is'); // 2
echo '<br>';
echo substr_count($text, 'is', 3);
echo '<br>';
echo substr_count($text, 'is', 3, 3);
// echo '<br>';
// генерує попередження, оскільки 5+10 > 14
// echo substr_count($text, 'is', 5, 10);
echo '<hr>';

// str_replace - замінює всі входження рядка пошуку на 
// рядок заміни.
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
echo $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

echo '<br>';
$phrase = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy = array("pizza", "beer", "ice cream");
echo $newphrase = str_replace($healthy, $yummy, $phrase);
echo '<br>';

$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
echo '<hr>';

// str_split - перетворює рядок у масив.
$str = "Hello Friend";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
echo '<br>';
print_r($arr2);
echo '<hr>';

// strrev - перевертає рядок задом наперед.
echo strrev("Hello world!");
echo '<hr>';

// substr_replace - замінює частину рядка.
$var = 'ABCDEFGH:/MNRPQR/';
echo "Оригінал: $var<hr />\n";

// Обидва наступні рядки замінюють весь рядок $var на 'bob'. 
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

// Вставляє 'bob' на початок $var. 
echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

// Обидва наступні рядки замінюють 'MNRPQR' у $var на 'bob'. 
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

// Видаляє 'MNRPQR' з $var. 
echo substr_replace($var, '', 10, -1) . "<br />\n";
echo '<hr>';

// trim - видаляє пробіли (або інші символи) з початку та 
// кінця рядка.
echo '<pre>';
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello = "Hello World";
var_dump([$text, $binary, $hello]);
echo '<br>';

$trimmed = trim($text);
var_dump($trimmed);
echo '<br>';

$trimmed = trim($text, " \t.");
var_dump($trimmed);
echo '<br>';

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);
echo '<br>';

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);
echo '<br>';

$clean = trim($binary, "\x00..\x1F");
var_dump($clean);
echo '</pre>';
echo '<hr>';

// Безпека:
// md5 - повертає MD5-хеш рядка.
$str = 'яблуко';
echo md5($str);
echo '<br>';

if (md5($str) === '04c695a04f4694573a036261ea22e4f8')
  echo "-> Перевірку пройдено!";

echo '<hr>';

// intval - повертає ціле значення змінної.
$number = intval('42.2');

if ($number)
  echo "Результат: $number";

echo '<hr>';

// htmlspecialchars - перетворює спеціальні символи на HTML-сутності.
$new = htmlspecialchars("<a href='https://www.google.com/'>Test</a>");
echo "<a href='https://www.google.com/'>Test</a>";
echo '<br>';

echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
echo '<hr>';

// strip_tags - видаляє HTML і PHP-теги з рядка.
$text = '<h3>Заголовок.</h3><!-- Коментар --> <a href="#">Ще текст</a>';
echo strip_tags($text);
echo '<br>';

// Дозволяємо <h3> і <a>
echo strip_tags($text, '<h3><a>');