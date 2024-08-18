<?php
require_once dirname(__DIR__) . '/includes/config.php';
include_once BASE_PATH . '/includes/header.php';
?>

<form action="<?php echo BASE_URL; ?>/controllers/authController.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <label>Select Tags:</label><br>
    <input type="checkbox" name="tags[]" value="Fiction"> Fiction<br>
    <input type="checkbox" name="tags[]" value="Science"> Science<br>
    <!-- Add more tags as needed -->
    <button type="submit" name="signup">Sign Up</button>
</form>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>