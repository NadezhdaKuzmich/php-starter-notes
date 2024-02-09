<?php

/*
Одинарні лапки
*/
echo '1. Це простий рядок';
echo '<br>';
// экранирование ' (одинарной кавычки)
echo '2. Якось Арнольд сказав: "I\'ll be back"';
echo '<br>';
// экранирование \ (обратного слеша)
echo '3. Ви впевнені, що хочете видалити папку "С:\system" ?';
echo '<br>';

/*
Подвійні лапки
*/
echo "<pre>";
$name = "Nadiia";
$secondName = "Kuzmich";
// You can use variables in your string (in ""):
echo "1. Привіт $name $secondName";
echo '<br>';
// You can use variables \n and so on:
echo "2. Приклад рядка,\n що охоплює кілька рядків.\n";
// экранирование " (двойной кавычки)
echo "3. Якось Арнольд сказав: \"I'll be back\"\n";
// экранирование $ (знака доллара)
echo "4. Ім'я зберігається у змінній \$name";
echo "</pre>";

/*
Heredoc (like string in "")
*/
echo <<<LABEL
  Приклад тексту,
  що охоплює кілька рядків,
  з використанням Heredoc-синтаксису.
LABEL;
echo '<br>';

/*
Nowdoc (like string in '')
*/
echo <<<'LABEL'
  Приклад тексту,
  що охоплює кілька рядків,
  з використанням Nowdoc-синтаксису.
LABEL;
echo '<br>';