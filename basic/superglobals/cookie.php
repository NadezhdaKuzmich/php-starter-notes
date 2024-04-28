<?php

/*
$_COOKIE
Асоціативний масив значень, переданих скрипту через HTTP Cookies.
- Small file that the webserver stores in the client computer. 

setcookie(
  string $name,
  string $value = "",
  int $expires_or_options = 0,
  string $path = "",
  string $domain = "",
  bool $secure = false,
  bool $httponly = false
): bool

Arguments:
1. Name
2. Value
3. Expire
4. Path
5. Domain
6. Security

- If you don't include an expiration date, the cookie 
will only be stored for the current session.
*/

// 86400 - 1 день у секундах
$time = time() + 86400 * 30;

// destroy
// $time = time() - 86400 * 30;

// setcookie - надсилає cookie
setcookie('name', 'Nadiia', $time);

echo '<pre>';
print_r($_COOKIE);
echo '<hr>';
echo $_COOKIE['name'];
echo '</pre>';