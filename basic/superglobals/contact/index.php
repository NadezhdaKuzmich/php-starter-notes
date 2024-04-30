<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <h1>Get in touch</h1>
    <p>Please, fill in the fields</p>
    <form action="contact.php" method="post">
      <input class="input-field" type="text" name="name" placeholder="Full name">
      <input class="input-field" type="email" name="email" placeholder="E-mail">
      <input class="input-field" type="text" name="subject" placeholder="Subject">
      <textarea name="message" placeholder="Enter message..."></textarea>
      <button class="btn" type="submit" name="submit">Send e-mail</button>
    </form>
  </div>
</body>

</html>