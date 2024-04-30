<?php

/*
mail - надсилає електронну пошту.

mail(
  string $to,
  string $subject,
  string $message,
  array|string $additional_headers = [],
  string $additional_params = ""
  ): bool

1. E-mail your sending it to
2. Subject
3. Is the message
*/

if (isset($_POST['submit'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);

  $myMail = 'test.email.php.od@gmail.com';
  $header = "From: $email";
  $preparedMsg = "You have received message from $name.\n\n $message";

  mail($myMail, $subject, $preparedMsg, $header);
  header('Location: index.php?mailsend');
}