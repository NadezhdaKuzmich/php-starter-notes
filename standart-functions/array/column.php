<?php

/*
Повернення масиву із значень одного стовпця вхідного масиву
*/

$records = [
    [
        'first_name' => 'Nadiia',
        'last_name' => 'Kuzmich',
    ],
    [
        'first_name' => 'Vadym',
        'last_name' => 'Sokolov',
    ]
];

$names = array_column($records, 'first_name');
$surenames = array_column($records, 'last_name');

print_r($names);
echo '<br>';
print_r($surenames);