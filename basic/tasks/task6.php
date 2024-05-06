<?php

// task 1
$colors = ['key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'];
$givenValue = 'Black';
echo "<b>Task 1:</b><br>";
echo '<pre>';
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
    // array_keys - повертає числові та рядкові ключі, що містяться в масиві. 
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
echo '</pre>';