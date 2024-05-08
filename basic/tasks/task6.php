<?php

// task 1
$colors = ["key1" => "Red", "key2" => "Green", "key3" => "Black"];
$givenValue = "Black";
echo "<pre>";
echo "<b>Task 1:</b><br>";
print_r($colors);
echo "<br>";

// Змінна $given_value визначена поза контекстом функції і невидима всередині. 
// Точно така сама поведінка і в анонімних функцій. Передача аргументів все ж 
// можлива, і робиться вона завдяки замиканню. За допомогою цього механізму можна 
// захопити змінні із зовнішнього оточення і використовувати їх усередині. Щоправда, 
// це працює тільки для анонімних функцій. Замиканням нерідко називають і саму 
// функцію, яка здійснила захоплення зовнішніх змінних. Захоплення змінних 
// здійснюється за допомогою ключового слова use і списку змінних, який йде після 
// цього слова. Вкрай важливо усвідомити, що use використовується при визначенні 
// функції, а не її виклику: function ($element) use ($given_value) {...}
$filteredArray = array_filter($colors, function ($element) use ($givenValue) {
  return ($element != $givenValue);
});

print_r($filteredArray);
echo "<hr>";

// task 2
function filterByValue($myArray, $index, $value)
{
  // is_array - визначає, чи є змінна масивом.
  if (is_array($myArray) && count($myArray) > 0) {
    // array_keys - повертає числові та рядкові ключі, що містяться в масиві:
    foreach (array_keys($myArray) as $key) {
      $temp[$key] = $myArray[$key][$index];

      if ($temp[$key] == $value) {
        $newArray[$key] = $myArray[$key];
      }
    }
  }

  return $newArray;
}

$colors = [
  0 => ["key1" => "Red", "key2" => "Green", "key3" => "Black"],
  1 => ["key1" => "Yellow", "key2" => "White", "key3" => "Pink"]
];

$results = filterByValue($colors, "key2", "White");
echo "<b>Task 2:</b><br>";
print_r($results);
echo "<hr>";

// task 3
$firstArray = ["c1" => "Red", "c2" => "Green", "c3" => "White", "c4" => "Black"];
$secondArray = ["c2", "c4"];

// array_flip - повертає масив навпаки, тобто ключі масиву array стають значеннями, 
// а значення масиву array стають ключами:
echo "<b>Task 3:</b><br>";
print_r(array_flip($secondArray));
echo "<br>";

// array_diff_key($array, $arrays): array
// Порівнює ключі array з ключами arrays і повертає різницю. Ця функція схожа 
// з array_diff за винятком того, що порівнюються ключі, а не значення:
$result = array_diff_key($firstArray, array_flip($secondArray));
print_r($result);
echo "<hr>";

// task 4
$colors = ["c1" => "Red", "c2" => "Green", "c3" => "White", "c4" => "Black"];
echo "<b>Task 4:</b><br>";
// next - поводиться так само, як функція current, з однією відмінністю. 
// Вона зсуває внутрішній покажчик масиву на одну позицію вперед, перш ніж 
// повернути значення елемента. Тобто вона повертає наступне значення масиву 
// і просуває внутрішній покажчик масиву на одну позицію:
echo next($colors) . "<br>";

$keys = array_keys(array_flip($colors));
// print_r($keys);

// array_pop - витягує і повертає значення останнього елемента масиву, 
// зменшуючи розмір на один елемент:
$last = array_pop($keys);
echo $last . "<br>";

// current - просто повертає значення елемента масиву, на який вказує 
// внутрішній покажчик. Вона не зсуває покажчик ні в якому напрямку:
echo current($colors) . "<br>";
echo "<hr>";

// task 5
$firstArray = ["c1" => "Red", "c2" => "Green", "c3" => "White", "c4" => "Black"];
$secondArray = ["c2", "c4"];

// array_intersect_key - повертає масив, що містить усі елементи масиву, 
// які мають ключі, що містяться у всіх інших параметрах.
$result = array_intersect_key($firstArray, array_flip($secondArray));

echo "<b>Task 5:</b><br>";
print_r($result);
echo "<hr>";

// task 6
function unionArray($x, $y)
{
  // array_merge - зливає елементи одного або декількох масивів так, 
  // що значення одного додаються в кінець попереднього:
  $aunion = array_merge(
    array_diff($x, $y),        // Elements in $x but not in $y
    array_intersect($x, $y),   // Intersection of $x and $y
    array_diff($y, $x)         // Elements in $y but not in $x
  );

  return $aunion;
}

$a = [1, 2, 3, 4];
$b = [2, 3, 4, 5, 6];

echo "<b>Task 6:</b><br>";
print_r(unionArray($a, $b));
echo "<hr>";

// task 7
function firstArrayElem(&$myArray)
{
  // Подібно до array, list це не функція, а мовна конструкція. 
  // list - використовується для того, щоб присвоїти списку змінних 
  // значення за одну операцію.
  list($key) = array_keys($myArray);
  // Зауваження: list працює тільки з масивами, індексами яких є числа 
  // і нумерація яких починається з 0.
  $result = [$key => $myArray[$key]];

  // unset - використовується для видалення змінних:
  unset($myArray[$key]);

  return $result;
}

$colors = ["c1" => "Red", "c2" => "Green", "c3" => "Black"];
echo "<b>Task 7:</b><br>";
print_r(firstArrayElem($colors));
echo "<br>";
print_r($colors);
echo "<hr>";

// task 8
function checkStr($arr)
{
  // => array_sum - повертає суму значень масиву. 
  // Отриманий результат матиме тип integer або float.
  // => array_map - застосовує callback-функцію до всіх 
  // елементів зазначених масивів.
  // => is_string - визначає, чи є змінна рядком.
  // Повертає TRUE, якщо var є string, інакше FALSE.
  return array_sum(array_map("is_string", $arr)) == count($arr);
}

$arr1 = ["PHP", "JS", "Python"];
$arr2 = ["SQL", 200, "MySQL"];

echo "<b>Task 8:</b><br>";
var_dump(checkStr($arr1));
var_dump(checkStr($arr2));
echo "<hr>";

// task 9
$colors1 = [["Red", 80], ["Green", 70], ["white", 60]];
$colors2 = [["Green", 70], ["Black", 95]];

// array_udiff - обчислює розбіжність масивів, 
// використовуючи для порівняння callback-функцію:
$colors = array_udiff(
  $colors1,
  $colors2,
  function ($arr1, $arr2) {
    // strcmp - порівняння рядків, безпечне для даних у двійковій формі
    // Повертає від"ємне число, якщо str1 менший за str2; додатне число, 
    // якщо str1 більший за str2, і 0, якщо рядки рівні.
    // implode - це вбудована функція, призначена для об"єднання елементів 
    // масиву в рядок із використанням певного роздільника. 
    return strcmp(implode("", $arr1), implode("", $arr2));
  }
);

echo "<b>Task 9:</b><br>";
print_r($colors);
echo "<hr>";

// task 10
function uniqArray($array, $value)
{
  $count = 0;

  foreach ($array as $key => $val) {
    if ($count > 0 && $val == $value) {
      unset($array[$key]);
    }

    if ($val == $value) {
      $count++;
    }
  }

  return array_filter($array);
}

$numbers = [4, 5, 6, 7, 4, 7, 8];
echo "<b>Task 10:</b><br>";
print_r(uniqArray($numbers, 7));
echo "<br>";
print_r(uniqArray($numbers, 4));
echo "<hr>";

// task 11
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

// array_unique - бере як параметр масив і повертає новий масив без повторюваних значень:
$result = implode(",", array_unique(array_merge(explode(",", $list1), explode(",", $list2))));
echo "<b>Task 11:</b><br>";
echo $result;
echo "<hr>";

// task 12
function findNotUnique($myArray)
{
  $arr = [];
  // natcasesort - cортує масив, використовуючи алгоритм 
  // "natural order" без урахування регістру символів.
  natcasesort($myArray);

  // reset - переміщує внутрішній покажчик array до його 
  // першого елемента і повертає значення першого елемента 
  // масиву або FALSE, якщо масив порожній.
  reset($myArray);

  $oldKey = NULL;
  $oldValue = NULL;

  foreach ($myArray as $key => $value) {
    if ($oldValue == $value) {
      $arr[$oldKey] = $oldValue;
      $arr[$key] = $value;
    }

    $oldKey = $key;
    $oldValue = $value;
  }

  return $arr;
}

$testArray = ["xyz@example.com", "dse@example.com", "xyz@example.com", "mno@example.com"];
echo "<b>Task 12:</b><br>";
print_r(findNotUnique($testArray));
echo "</pre>";