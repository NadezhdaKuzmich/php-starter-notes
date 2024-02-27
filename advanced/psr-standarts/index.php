<?php

/*
PSR стандарти уніфікують код програмістів.

Основные рекомендации:
- Назва файлів
UserGridClass.php
ChangeLists.php

- Теги PHP
<? ?>
<?php ?>

- Namespace
Test\Sample\Code

- Порожні рядки
після <?php
після namespace
після use

- Interface
TestInterface
LayoutInterface

- { } дужки
Для interface, class, method з нового рядка

- Назва методу
Пишемо з camelCase changeLayoutFunc()

- { } дужки if else
Не переносимо, також для switch

- Видаляємо зайве
Не залишайте після себе закоментований код

- Асоціативні масиви
Ключі завжди пишемо в snake_case

- Одинарні лапки
Усі рядки розміщувати тільки в одинарних лапках

- Індекси циклів
Краще давати індексам осмислені імена, щоб простіше 
розібратися з кодом надалі.

- Групування методів
Розташовуємо методи в певній послідовності за своїм 
призначенням, щоб потім легше було знайти потрібну функцію.

1. Don’t repeat yourself 
Завжди намагайтеся писати функції, щоб їх повторно 
використовувати у класах-спадкоємцях. Або використовуйте 
interface.
2. Single Responsibility Principle один клас = одна функція.
Або, іншими словами, розділяйте код на модулі.
3. Вкладеність if і foreach не > 2
*/

interface CutInterface
{
  public function slice($num, $quantity);
}

class Fruits
{
  const PEAR_SORT = 'Orange sky';
  const APPLE_SORT = 'Red prince';
}
class Pears extends Fruits implements CutInterface
{
  public function findColor()
  {
    $fresh = true;
    $pearbox = ['red', 'yellow', 'green'];
    switch ($pearbox[0]) {
      case 'red':
        $result = 'red';
        if ($fresh) {
          break;
        }
      default:
        $result = 'other color';
        break;
    }
    return $result;
  }
  public function slice($num, $quantity)
  {
    return 'We have sliced ' . $quantity . ' pears to ' . $num . ' parts.';
  }
}
class Apple extends Fruits
{
  public function checkWeight()
  {
    $applebox = ['Africa' => 10, 'Ukraine' => 5, 'Poland' => 1, 'South America' => 15];
    foreach ($applebox as $key => $value) {
      if ($key == 'Poland') {
        return $value;
      }
    }
  }
}

$fruitpear = new Pears;
$result = $fruitpear->findColor();
echo 'We have found ' . $result . ' pears. <hr>';
$result = $fruitpear->slice(10, 2);
echo $result;

$fruitapple = new Apple;
$result = $fruitapple->checkWeight();
echo '<hr> Poland delivered ' . $result . ' tons of apples.';