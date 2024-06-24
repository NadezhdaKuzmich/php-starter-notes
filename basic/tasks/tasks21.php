<?php

// task 1
function tail($items)
{
  return count($items) > 1 ? array_slice($items, 1) : $items;
}

echo "<b>Task 1:</b><br>" . "<pre>";
print_r(tail([1, 2, 3]));
echo "</pre>" . "<hr>";

// task 2
function take($items, $count = 1)
{
  return array_slice($items, 0, $count);
}

echo "<b>Task 2:</b><br>" . "<pre>";
print_r(take([1, 2, 3], 1));
echo "<br>";
print_r(take([1, 2, 3, 4, 5], 2));
echo "</pre>" . "<hr>";

// task 3
function without($items, ...$params)
{
  return array_values(array_diff($items, $params));
}

echo "<b>Task 3:</b><br>" . "<pre>";
print_r(without([2, 1, 2, 3], 1, 2));
echo "</pre>" . "<hr>";

// task 4
function orderBy($items, $attr, $order)
{
  $sortedItems = [];

  foreach ($items as $item) {
    $key = $item[$attr];
    $sortedItems[$key] = $item;
  }

  if ($order === 'desc') {
    // krsort - сортує масив за ключами у порядку зменшення, 
    // зберігаючи відношення між ключами і значеннями:
    krsort($sortedItems);
  } else {
    // ksort - сортує масив за ключами у порядку зростання, 
    // зберігаючи відношення між ключами і значеннями:
    ksort($sortedItems);
  }

  return array_values($sortedItems);
}

echo "<b>Task 4:</b><br>" . "<pre>";
print_r(
  orderBy(
    [
      ['id' => 2, 'name' => 'Red'],
      ['id' => 3, 'name' => 'Black'],
      ['id' => 1, 'name' => 'Green']
    ],
    'id',
    'desc'
  )
);
echo "</pre>" . "<hr>";