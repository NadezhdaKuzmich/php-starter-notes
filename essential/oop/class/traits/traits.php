<?php

/*
Трейт
- Реалізація множинного успадкування класів у мові PHP.
*/

// множинне успадкування трейтів
trait Translate
{
  public function getUa()
  {
    return $this->title . 'UA!!!';
  }

  // припустимо, що тут вибирається англійський варіант title
  public function getEn()
  {
    return $this->title . 'EN!!!';
  }
}

trait Author
{
  public function getAuthor()
  {
    return ucfirst($this->author);
  }
}


class News
{
  protected $title;
  protected $author;

  use Translate;
  use Author;

  public function __construct($title, $author)
  {
    $this->title = $title;
    $this->author = $author;
  }
}

class NewsCategory
{
  protected $title;
  protected $author;

  // альтернативний варіант запису кількох трейтів
  use Translate, Author;

  public function __construct($title, $author)
  {
    $this->title = $title;
    $this->author = $author;
  }
}

$newsCategory = new NewsCategory('спорт', 'dozer111');
$news = new News('Ліверпуль обіграє Барселону на Енфілді', 'redactor_1409');

// для нашого користувача ми робимо:
echo "<pre>";
var_dump(
  [
    $newsCategory->getUa(),
    $news->getUa(),
    $news->getAuthor(),
  ]
);

// для англомовного
var_dump(
  [
    $newsCategory->getEn(),
    $news->getEn(),
    $news->getAuthor(),
  ]
);
echo "<pre>";