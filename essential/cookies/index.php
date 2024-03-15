<?php

/*
Визначення сесій і куків:
$_SESSION 
- глобальний масив, який містить змінні, що зберігаються до закриття браузера.
$_COOKIES 
- глобальний масив, який містить змінні, що зберігаються до закінчення часу життя.
*/

session_start();

if (isset ($_POST['userName']) && !empty ($_POST['userName'])) {
  $_SESSION['userName'] = $_POST['userName'];
  setcookie('userName', $_POST['userName'], time() + 50);
  echo $_SESSION['userName'] . '<br />';
  echo $_COOKIE['userName'];
}
?>

<form action="#" method="post">
  <input type="text" name="userName" placeholder="Ім'я" value="<?php if (isset ($_POST['userName']) && !empty ($_POST['userName'])) {
    echo $_POST['userName'];
  } ?>">
  <br /><br />
  <input type="password" name="userPass" placeholder="Пароль">
  <br /><br />
  <input type="checkbox" name="remember" value="1" <?php if (isset ($_POST['remember']) && !empty ($_POST['remember'])) {
    echo 'checked';
  } ?>>Запам'ятати мене
  <br /><br />
  <input type="submit" value="Відправити">
</form>