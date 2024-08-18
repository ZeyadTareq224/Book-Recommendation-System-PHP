<?php
require_once dirname(__DIR__) . '/includes/config.php';
include_once BASE_PATH . '/includes/header.php';
?>

<form action="<?php echo BASE_URL; ?>/controllers/authController.php" method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
</form>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>