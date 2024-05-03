<?php
require_once 'includes/header.php';
?>

<div class="container">
  <h1>
    <?php echo isset($_SESSION['sessionId']) ? 'You are logged in!' : 'Home'; ?>
  </h1>
</div>

<?php
require_once 'includes/footer.php';
?>