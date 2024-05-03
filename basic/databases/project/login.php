<?php
require_once 'includes/header.php';
?>

<div class="container">
  <div class="form-wrapper">
    <h1>Log in</h1>
    <p>No account? <a href="register.php">Register here!</a></p>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <button class="btn" type="submit">Get in</button>
    </form>
  </div>
</div>

<?php
require_once 'includes/footer.php';
?>