<?php

// task 1
$colors = ['key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'];
$givenValue = 'Black';
echo '<pre>';
echo "<b>Task 1:</b><br>";
print_r($colors);
echo '<br>';

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
echo '<hr>';

// task 2
function filterByValue($myArray, $index, $value)
{
  // is_array - визначає, чи є змінна масивом.
  if (is_array($myArray) && count($myArray) > 0) {
    // array_keys - повертає числові та рядкові ключі, що містяться в масиві:
    foreach (array_keys($myArray) as $key) {
      $temp[$key] = $myArray[$key][$index];

      if ($temp[$key] == $value) {
        $new_array[$key] = $myArray[$key];
      }
    }
  }

  return $new_array;
}

$colors = [
  0 => ['key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'],
  1 => ['key1' => 'Yellow', 'key2' => 'White', 'key3' => 'Pink']
];

$results = filterByValue($colors, 'key2', 'White');
echo "<b>Task 2:</b><br>";
print_r($results);
echo '<hr>';

// task 3
$first_array = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'];
$second_array = ['c2', 'c4'];

// array_flip - повертає масив навпаки, тобто ключі масиву array стають значеннями, 
// а значення масиву array стають ключами:
echo "<b>Task 3:</b><br>";
print_r(array_flip($second_array));
echo '<br>';

// array_diff_key($array, $arrays): array
// Порівнює ключі array з ключами arrays і повертає різницю. Ця функція схожа 
// з array_diff за винятком того, що порівнюються ключі, а не значення:
$result = array_diff_key($first_array, array_flip($second_array));
print_r($result);
echo '<hr>';

// task 4
$colors = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'];
echo "<b>Task 4:</b><br>";
// next - поводиться так само, як функція current, з однією відмінністю. 
// Вона зсуває внутрішній покажчик масиву на одну позицію вперед, перш ніж 
// повернути значення елемента. Тобто вона повертає наступне значення масиву 
// і просуває внутрішній покажчик масиву на одну позицію:
echo next($colors) . '<br>';

$keys = array_keys(array_flip($colors));
// print_r($keys);

// array_pop - витягує і повертає значення останнього елемента масиву, 
// зменшуючи розмір на один елемент:
$last = array_pop($keys);
echo $last . '<br>';

// current - просто повертає значення елемента масиву, на який вказує 
// внутрішній покажчик. Вона не зсуває покажчик ні в якому напрямку:
echo current($colors) . '<br>';
echo '<hr>';

echo '</pre>';