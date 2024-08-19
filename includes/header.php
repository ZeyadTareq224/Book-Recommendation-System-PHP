<?php
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/includes/config.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="bg-gray-800 text-white fixed top-0 w-full z-50">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <div class="flex space-x-4">
                    <a href="<?php echo BASE_URL; ?>/index.php" class="hover:text-gray-400">Home</a>
                    <a href="<?php echo BASE_URL; ?>/pages/recommendations.php" class="hover:text-gray-400">Recommendations</a>
                </div>
                <div class="flex space-x-4">
                    <?php if (isset($_SESSION['user'])): ?>
                        <span class="text-gray-300">Welcome, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</span>
                        <a href="<?php echo BASE_URL; ?>/pages/logout.php" class="hover:text-red-500">Logout</a>
                    <?php else: ?>
                        <a href="<?php echo BASE_URL; ?>/pages/signup.php" class="hover:text-gray-400">Sign Up</a>
                        <a href="<?php echo BASE_URL; ?>/pages/login.php" class="hover:text-gray-400">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
