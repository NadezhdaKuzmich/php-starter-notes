<?php

/*
- Патерни дають змогу використовувати нам готові практики і 
напрацювання.
- Зазвичай шаблони універсальні для всіх ООП мов програмування.
- Паттерни поділяються на структурні, породжувальні, поведінкові.

- Фабричний метод - це породжувальний патерн проектування, який 
визначає загальний інтерфейс для створення об'єктів у суперкласі, 
дозволяючи підкласам змінювати тип створюваних об'єктів.

- Абстрактна фабрика - породжувальний патерн проєктування, який дає змогу
створювати сімейства пов'язаних об'єктів, не прив'язуючись до конкретних 
класів створюваних об'єктів.

- Фасад - це структурний патерн проектування, який надає простий інтерфейс 
до складної системи класів, бібліотеки або фреймворку.
*/

abstract class SocialNetworkPublisher
{
  abstract public function getSocialNetwork(): SocialNetworkJoint;

  public function post($content): void
  {
    $network = $this->getSocialNetwork();
    echo "<pre>", var_dump($network), "</pre>";
    $network->logIn();
    $network->createPost($content);
    $network->logout();
  }
}

class FacebookPublisher extends SocialNetworkPublisher
{
  private $login, $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function getSocialNetwork(): SocialNetworkJoint
  {
    return new FacebookConnector($this->login, $this->password);
  }
}

class LinkedInPublisher extends SocialNetworkPublisher
{
  private $email, $password;

  public function __construct(string $email, string $password)
  {
    $this->email = $email;
    $this->password = $password;
  }

  public function getSocialNetwork(): SocialNetworkJoint
  {
    return new LinkedInConnector($this->email, $this->password);
  }
}

interface SocialNetworkJoint
{
  public function logIn(): void;

  public function logOut(): void;

  public function createPost($content): void;
}

class FacebookConnector implements SocialNetworkJoint
{
  private $login, $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function logIn(): void
  {
    echo "Send HTTP API request to log in user $this->login with " .
      "password $this->password" . "</br>";
  }

  public function logOut(): void
  {
    echo "Send HTTP API request to log out user $this->login" . "</br>";
  }

  public function createPost($content): void
  {
    echo "Send HTTP API requests to create a post in Facebook timeline." . "</br>";
  }
}

class LinkedInConnector implements SocialNetworkJoint
{
  private $email, $password;

  public function __construct(string $email, string $password)
  {
    $this->email = $email;
    $this->password = $password;
  }

  public function logIn(): void
  {
    echo "Send HTTP API request to log in user $this->email with " .
      "password $this->password" . "</br>";
  }

  public function logOut(): void
  {
    echo "Send HTTP API request to log out user $this->email" . "</br>";
  }

  public function createPost($content): void
  {
    echo "Send HTTP API requests to create a post in LinkedIn timeline." . "</br>";
  }
}

function clientCode(SocialNetworkPublisher $creator)
{
  $creator->post("Hello world!");
}

echo "Testing ConcreteCreator1:<hr>";
clientCode(new FacebookPublisher("susanna", "******"));
echo "<hr>";

echo "Testing ConcreteCreator2:<hr>";
clientCode(new LinkedInPublisher("susy_fox@example.com", "******"));
echo "<hr>";