<?php

/*
Операції порівняння
*/

// дорівнює (після перетворення типів)
echo '2 == "2" ';
var_dump(2 == "2");
echo '<br>';

echo '2 == "абв" ';
var_dump(2 == "абв");
echo '<br>';

echo '7 == 7 ';
var_dump(7 == 7);
echo '<br>';

// тотожно дорівнює (має той самий тип)
echo '2 === "2" ';
var_dump(2 === "2");
echo '<br>';

echo '5 === 5 ';
var_dump(5 === 5);
echo '<br>';

// не дорівнює (після перетворення типів)
echo '2 != 1  ';
var_dump(2 != 1);
echo '<br>';

// тотожно не дорівнює (має той самий тип)
echo '5 !== "2"  ';
var_dump(5 !== "2");
echo '<br>';

// менше (суворо)
echo '2 < 5  ';
var_dump(2 < 5);
echo '<br>';

echo '5 < 5  ';
var_dump(5 < 5);
echo '<br>';

// більше (суворо)
echo '2 > 5  ';
var_dump(2 > 5);
echo '<br>';

// менше або дорівнює
echo '2 <= 5  ';
var_dump(2 <= 5);
echo '<br>';

echo '2 <= 2  ';
var_dump(2 <= 2);
echo '<br>';

// більше або дорівнює
echo '13 >= 7 ';
var_dump(13 >= 7);
echo '<br>';