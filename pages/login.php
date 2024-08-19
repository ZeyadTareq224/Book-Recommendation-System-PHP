<?php
require_once dirname(__DIR__) . '/includes/config.php';
include_once BASE_PATH . '/includes/header.php';
?>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
        <form action="<?php echo BASE_URL; ?>/controllers/authController.php" method="POST" class="space-y-4">
            <input 
                type="email" 
                name="email" 
                placeholder="Email" 
                required 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
            <input 
                type="password" 
                name="password" 
                placeholder="Password" 
                required 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
            <button 
                type="submit" 
                name="login" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200"
            >
                Login
            </button>
        </form>
    </div>
</div>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>
