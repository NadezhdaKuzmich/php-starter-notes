<?php

/*
Усі значення в PHP можна передавати або за значенням або за посиланням:
- Передача значення – передається копія значення.
- Надсилання за посиланням – передає посилання на місце в пам'яті, де зберігається значення.

Об'єкти так само, як і інші типи даних, можна порівнювати.
Об'єкти нестрого рівні, якщо всі їхні властивості рівні.
Об'єкти строго рівні, лише якщо порівнюється сам із собою той самий об'єкт.
*/

$a = 1;
$b = $a;
$b = 2;
// a => 1
// b => 1 (значення) => 2
print_r([$a, $b]); // 1, 2
echo "<br>";

$a = 1;
$b = &$a;
$b = 2;
// a => 1 => 2
// b => 1 (посилання) => 2
print_r([$a, $b]); // 2, 2
echo '<br>';

$a = 1;
$b = &$a;
$c = &$b;
$d = &$c;
$d = 'Hello!';
print_r([$a, $b, $c, $d]);
echo '<br>';

// Надсилання за посиланням
class Cat
{
  public $name;
  public $color;
}

$cat1 = new Cat();
$cat1->name = 'Murzik';
$cat1->color = 'Black';

$cat2 = $cat1;
$cat2->name = 'Businka';

print_r([$cat1->name, $cat2->name]); // Businka, Businka

echo "<pre>";
var_dump($cat1, $cat2);
echo "</pre>";

// == & ===
var_dump([
  'НЕСТРОГО!' => $cat1 == $cat2,
  'СТРОГО!' => $cat1 === $cat2
]);
echo '<br>';

$cat3 = new Cat();
$cat3->name = 'Businka';
$cat3->color = 'Black';

echo "<pre>";
var_dump($cat1, $cat3);
echo "</pre>";

var_dump([
  'НЕСТРОГО!' => $cat1 == $cat3,
  'СТРОГО!' => $cat1 === $cat3
]);