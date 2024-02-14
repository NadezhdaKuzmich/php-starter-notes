<?php

/*
Статика в PHP ООП
Статичні значення ООП не прив'язані до поточного контексту об'єкта, 
вони прив'язані до контексту класу. Для їх реєстрації в класі додається ключове слово static: 
public static $x

Викликаються статичні значення як і константи, тільки попереду ще ставиться
символ $: self::$staticPropName
*/

class Cat
{
  public $name;
  public static $defaultName = 'Murzik';

  public function create($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    if (!empty($this->name)) {
      return $this->name;
    }
    return self::$defaultName;
  }

}

$cat = new Cat();
$cat->create('');
echo $cat->getName() . "<br>"; // Murzik
$cat->create('Businka');
echo $cat->getName() . "<br>"; // Businka

class Dog
{
  public static $defaultName = 'Mukhtar';
}

echo "In Ukraine default cat name is " . Cat::$defaultName . '. <br>';
echo "In Ukraine default dog name is " . Dog::$defaultName . '. <br>';

class Country
{
  // ключові слова
  // public, static
  public static function getDefaultName()
  {
    return 'Ukraine';
  }
}

// вызов имяКласса::имяМетода()
echo "Now we are speaking about " . Country::getDefaultName() . '...';