<?php

// множинні простори імен
// явний приклад локального namespace
namespace ns1 {
  class User
  {
  }
  class User2
  {
  }
}

namespace ns2 {
  class Article
  {
  }
  class ArticleCategory
  {
  }
}

namespace ns3 {
  use ns2\Article;
  use ns1\User;

  $user = new User();
  $article = new Article();
}