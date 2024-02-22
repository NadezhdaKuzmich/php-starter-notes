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

  private function sayHiTo($name)
  {
    return 'Hi ' . $name;
  }
}

//  ReflectionProperty 
$person = new Person();
$ReflectionProperty = new ReflectionProperty(Person::class, "name");
$name = $ReflectionProperty->getValue($person);

// ReflectionClass
$reflectionClass = new ReflectionClass($person);

$propName = $reflectionClass->getProperty('name');
$propName->setValue($person, 'Nadia');

$props = $reflectionClass->getProperties();

$protectedProps = $reflectionClass->getProperties(ReflectionProperty::IS_PROTECTED);

$methods = $reflectionClass->getMethods();
$hiMethod = $reflectionClass->getMethod('sayHiTo');
$hiMethod->setAccessible(true);

// ReflectionMethod
$reflectionMethod = new ReflectionMethod('Person', 'sayHelloTo');

echo "<pre>";
// ReflectionProperty 
print_r($name);
echo "<hr>";

// ReflectionClass
echo $propName->getValue($person);
echo "<hr>";
var_dump([
  $props,
  $protectedProps,
  $methods
]);
echo "<hr>";
echo $hiMethod->invoke($person, 'World');
echo "<hr>";

// ReflectionMethod
echo $reflectionMethod->invoke(new Person(), 'World');
echo "<hr>";
echo $reflectionMethod->invokeArgs(new Person(), array('PHP'));
echo "<hr>";
var_dump($reflectionMethod->getDeclaringClass());
echo "<hr>";
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
echo "<hr>";
var_dump($methods);
echo "<hr>";
echo "</pre>";

$i = 1;
foreach ($properties as $property) {
  $a->{$property->getName()} = $i;
  $a->{"echo" . ucfirst($property->getName())}();
  $i++;
}
echo "<hr/>";

// Custom ClassAnalyzer
class ClassAnalyzer
{
  private $className;
  private $reflector;

  public function __construct(string $className)
  {
    try {
      $this->className = $className;
      $this->reflector = new ReflectionClass($this->className);
    } catch (ReflectionException $e) {
      throw new $e('::class of <fullClassName> does not exists');
    }
  }

  public function showPropMeth(): string
  {
    $resultString = '';
    $classType = \Reflection::getModifierNames($this->reflector->getModifiers());
    $resultString .= "Class: {$this->className}";
    $resultString .= (!empty($classType[0])) ? " is $classType[0]" : '';
    $resultString .= \PHP_EOL;
    $resultString .= $this->createCountList();
    return $resultString;
  }

  protected function createCountList(): string
  {
    $reflector = $this->reflector;
    $properties = $reflector->getProperties();
    $methods = $reflector->getMethods();

    $resultArray = [
      'properties' =>
        [
          'public' => 0,
          'protected' => 0,
          'private' => 0,
        ],
      'methods' =>
        [
          'public' => 0,
          'protected' => 0,
          'private' => 0,
        ],
    ];

    foreach ($properties as $property) {
      if ($property->isPublic()) {
        $resultArray['properties']['public']++;
      } elseif ($property->isProtected()) {
        $resultArray['properties']['protected']++;
      } else {
        $resultArray['properties']['private']++;
      }
    }

    foreach ($methods as $method) {
      if ($method->isPublic()) {
        $resultArray['methods']['public']++;
      } elseif ($method->isProtected()) {
        $resultArray['methods']['protected']++;
      } else {
        $resultArray['methods']['private']++;
      }
    }
    return $this->createProtMethViewString($resultArray);
  }

  protected function createProtMethViewString(array $propMethArray): string
  {
    $resultString = '';
    foreach ($propMethArray as $dataKey => $dataType) {
      $resultString .= \sprintf('<comment>%s</comment>', \ucfirst($dataKey) . ':' . \PHP_EOL);

      foreach ($dataType as $securityLevel => $count) {
        $resultString .= "\t $securityLevel: $count" . \PHP_EOL;
      }
    }
    return $resultString;
  }
}

$analyzer1 = new ClassAnalyzer(Person::class);
$analyzer2 = new ClassAnalyzer(A::class);

echo $analyzer1->showPropMeth();
echo "<hr/>";
echo $analyzer2->showPropMeth();