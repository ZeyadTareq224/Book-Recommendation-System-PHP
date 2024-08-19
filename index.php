<?php
require_once __DIR__ . '/includes/config.php';
include_once BASE_PATH . '/includes/header.php';
?>

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Book Recommendation Site</h1>
        <p class="text-gray-600 mb-6">Sign up or log in to get personalized book recommendations.</p>
        <div class="flex justify-center space-x-4">
            <a href="<?php echo BASE_URL; ?>/pages/signup.php" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Sign Up</a>
            <a href="<?php echo BASE_URL; ?>/pages/login.php" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Log In</a>
        </div>
    </div>
</div>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>