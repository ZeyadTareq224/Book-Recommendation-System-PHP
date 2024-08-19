<?php
require_once dirname(__DIR__) . '/includes/config.php';
include_once BASE_PATH . '/includes/header.php';
?>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign Up</h2>
        <form action="<?php echo BASE_URL; ?>/controllers/authController.php" method="POST" class="space-y-4">
            <input 
                type="text" 
                name="username" 
                placeholder="Username" 
                required 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
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

            <label class="block text-gray-700 mb-2">Select Tags:</label>
            <div class="flex flex-wrap gap-2 mb-6">
                <label class="tag-button cursor-pointer">
                    <input type="checkbox" name="tags[]" value="Fiction" class="hidden">
                    <span class="text">Fiction</span>
                </label>
                <label class="tag-button cursor-pointer">
                    <input type="checkbox" name="tags[]" value="Science" class="hidden">
                    <span class="text">Science</span>
                </label>
                <label class="tag-button cursor-pointer">
                    <input type="checkbox" name="tags[]" value="Science Fiction" class="hidden">
                    <span class="text">Science Fiction</span>
                </label>
                <label class="tag-button cursor-pointer">
                    <input type="checkbox" name="tags[]" value="Romance" class="hidden">
                    <span class="text">Romance</span>
                </label>
                <label class="tag-button cursor-pointer">
                    <input type="checkbox" name="tags[]" value="Fantasy" class="hidden">
                    <span class="text">Fantasy</span>
                </label>
                <!-- Add more tags as needed -->
            </div>

            <button 
                type="submit" 
                name="signup" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200"
            >
                Sign Up
            </button>
        </form>
    </div>
</div>

<style>
    .tag-button {
        display: inline-flex;
        align-items: center;
        padding: 5px 12px;
        border-radius: 9999px; /* Fully rounded */
        background-color: #e0e0e0;
        border: 1px solid #ccc;
        font-size: 0.875rem; /* Smaller font size */
        color: #333;
        transition: background-color 0.3s ease, color 0.3s ease;
        cursor: pointer; /* Makes sure the cursor is a pointer */
    }

    .tag-button:hover {
        background-color: #007bff;
        color: #fff;
    }

    .tag-button input:checked + .text {
        background-color: #007bff;
        color: #fff;
        border: 1px solid #007bff;
    }

    .tag-button .text {
        padding: 5px 12px; /* Adjust padding to ensure full coverage */
        display: block;
        width: auto;
        border-radius: 9999px; /* Fully rounded */
        background-color: #e0e0e0; /* Default background color */
    }
</style>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>
