<?php
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/includes/config.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    </head>
    <body>
        <nav>
            <div class="nav-left">
                <a href="<?php echo BASE_URL; ?>/index.php">Home</a>
                <a href="<?php echo BASE_URL; ?>/pages/recommendations.php">Recommendations</a>
            </div>
            <div class="nav-right">
                <?php if (isset($_SESSION['user'])): ?>
                    <span class="welcome-message">Welcome, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</span>
                    <a href="<?php echo BASE_URL; ?>/pages/logout.php">Logout</a>
                <?php else: ?>
                    <a href="<?php echo BASE_URL; ?>/pages/signup.php">Sign Up</a>
                    <a href="<?php echo BASE_URL; ?>/pages/login.php">Login</a>
                <?php endif; ?>
            </div>
        </nav>