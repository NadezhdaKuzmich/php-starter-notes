<?php

/*
$GLOBALS
Асоціативний масив, що містить посилання на всі змінні, 
визначені на цей момент у глобальній області видимості 
скрипта. Імена змінних є ключами масиву.
*/

$x = 100;
$y = 200;

function add()
{
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $z;