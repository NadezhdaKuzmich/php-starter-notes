<?php

/*
Змінна - іменована або адресована іншим способом область пам'яті, 
адресу якої можна використовувати для здійснення доступу до даних 
і зміни значень під час виконання програми.

Позначення змінної:
• Перед іменем завжди ставиться знак долара $
• Першою йде буква, за нею можуть йти букви та цифри
• Ім'я реєстрозалежне
$var і $Var - 2 різні змінні

Правила:
1. Не можна використовувати пробіл в імені змінної
2. Не можна щоб ім'я змінної починалося з цифри
3. Змінна повинна починатися із символу $.

Область видимості змінних - це контекст, у межах якого змінна була 
визначена і де до неї можна отримати доступ. 
У PHP є дві області видимості змінних:
- Глобальна - 
до змінних можна отримати доступ у будь-якому місці скрипта.
-Локальна - 
до змінних можна отримати доступ тільки всередині функції, в 
якій вони були визначені.
*/

// $aZ_ = 'value';
$myFirstVar = 'PHP Variable';
var_dump($myFirstVar);

// Змінній можна присвоїти значення іншої змінної
$newVar = $myFirstVar;
// var_dump($newVar);

// Дії зі змінними:
// Присвоєння значення
$name = "Nadiia";

// перевірка існування
$isNameSet = isset ($name); // 1
$isAgeSet = isset ($age); // 
// echo "</br>isNameSet: $isNameSet isAgeSet: $isAgeSet";

// знищення
unset($name);
// var_dump($name);
echo "<hr>";

/*
Посилання на змінну
Посилання в PHP дають змогу створити дві змінні, що вказують на 
одне й те саме значення. Таким чином, коли виконується наступне, 
то змінна $var2 вказує на те саме значення, що і $var :
*/
$var = 'Text';
$var2 = &$var;
echo "var: $var</br> var2: $var2 <hr>";

$var = 'My text';
echo "var: $var</br> var2: $var2 <hr>";

$first_player_rank = "Beginner";
$second_player_rank =& $first_player_rank;
echo $second_player_rank . "<hr>";

$first_player_rank = "Intermediate";
echo $second_player_rank;