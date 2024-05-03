<?php
require_once 'includes/header.php';
?>
<div class="container">
  <div class="form-wrapper">
    <h1>Register</h1>
    <p>Already have an account? <a href="login.php">Login!</a></p>
    <form action="includes/register-inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="password" name="confirmPassword" placeholder="Confirm password">
      <button class="btn" type="submit" name="submit">Register</button>
    </form>
  </div>
</div>

<?php
require_once 'includes/footer.php';
?>