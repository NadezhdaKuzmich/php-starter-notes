<?php

// task 1
function tail($items)
{
  return count($items) > 1 ? array_slice($items, 1) : $items;
}

echo "<b>Task 1:</b><br>" . "<pre>";
print_r(tail([1, 2, 3]));
echo "</pre>" . "<hr>";