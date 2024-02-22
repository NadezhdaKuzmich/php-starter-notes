<?php

/*
Інтроспекція - це здатність програми досліджувати тип або властивості об'єкта
під час роботи програми. Інтроспекція дозволяє вам вивчати атрибути об'єкта під 
час виконання програми, а рефлексія - маніпулювати ними.

Рефлексія - механізм мови, який дає змогу дізнаватися метаінформацію про клас або 
його внутрішній вміст, або змінювати її.

Рефлексія - загальний термін, притаманний не тільки PHP.
Базові класи для ознайомлення з рефлексією:
- ReflectionClass
- ReflectionProperty 
- ReflectionMethod

Практично в кожному мажорному патчі PHP зачіпається рефлексія
*/

class Person
{
  private $name = "Nadiia";

  private $surname = "Kuzmich";
  protected $age = 27;

  public function firstMethod()
  {
  }
  final protected function secondMethod()
  {
  }
  private static function thirdMethod()
  {
  }

  public function sayHelloTo($name)
  {
    return 'Hello ' . $name;
  }
}

//  ReflectionProperty 
$person = new Person();
$ReflectionProperty = new ReflectionProperty(Person::class, "name");
$ReflectionProperty->setAccessible(true);
$name = $ReflectionProperty->getValue($person);

// ReflectionClass
$reflectionClass = new ReflectionClass($person);
$props = $reflectionClass->getProperties();
$protectedProps = $reflectionClass->getProperties(ReflectionProperty::IS_PROTECTED);
$methods = $reflectionClass->getMethods();

// ReflectionMethod
$reflectionMethod = new ReflectionMethod('Person', 'sayHelloTo');

echo "<pre>";
print_r($name);
echo "<br>";

var_dump($props);
echo "<br>";
var_dump($protectedProps);
echo "<br>";
var_dump($methods);
echo "<br>";

echo $reflectionMethod->invoke(new Person(), 'World');
echo "<br>";
echo $reflectionMethod->invokeArgs(new Person(), array('PHP'));
echo "<br>";
var_dump($reflectionMethod->getDeclaringClass());
echo "</pre>";

class A
{
  public $one = '';
  public $two = '';

  public function echoOne()
  {
    echo $this->one . '<br>';
  }

  public function echoTwo()
  {
    echo $this->two . '<br>';
  }
}

$a = new A();
$reflector = new ReflectionClass('A');
$properties = $reflector->getProperties();
$methods = $reflector->getMethods();

echo "<pre>";
echo "Class Name: " . $reflector->getName() . "<br>";
echo "<br>";
var_dump($methods);
echo "</pre>";

$i = 1;
foreach ($properties as $property) {
  $a->{$property->getName()} = $i;
  $a->{"echo" . ucfirst($property->getName())}();
  $i++;
}