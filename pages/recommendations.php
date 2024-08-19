<?php
require_once dirname(__DIR__) . '/includes/config.php';
require_once BASE_PATH . '/controllers/recommendationController.php';
include_once BASE_PATH . '/includes/header.php';
?>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Recommended Books</h1>

    <?php if (isset($recommendedBooks) && count($recommendedBooks) > 0): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-6">
            <p>Number of Recommended Books: <?php echo count($recommendedBooks); ?></p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($recommendedBooks as $book): ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition-transform cursor-pointer" onclick="openModal('<?php echo htmlspecialchars($book['title']); ?>', '<?php echo htmlspecialchars($book['cover_image']); ?>', '<?php echo htmlspecialchars($book['tag']); ?>', '<?php echo htmlspecialchars($book['author']); ?>', '<?php echo htmlspecialchars($book['book_brief']); ?>')">
                    <!-- Cover Image -->
                    <img src="<?php echo htmlspecialchars($book['cover_image']); ?>" 
                         alt="Cover of <?php echo htmlspecialchars($book['title']); ?>" 
                         class="w-full h-72 object-cover"
                         onerror="this.onerror=null; this.src='<?php echo BASE_URL; ?>/assets/images/default-cover.jpg';">
                    
                    <div class="p-4 flex flex-col">
                        <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($book['title']); ?></h3>
                        <p class="text-gray-600 mb-2"><?php echo htmlspecialchars($book['author']); ?></p>
                        <div class="flex flex-wrap gap-2 mt-auto">
                            <span class="bg-gray-200 text-gray-800 py-1 px-3 rounded-full text-sm"><?php echo htmlspecialchars($book['tag']); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No recommended books found based on your selected tags.</p>
    <?php endif; ?>
</div>

<!-- Modal -->
<div id="bookModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg max-w-md w-full relative">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        <div class="flex flex-col items-center">
            <img id="modalCoverImage" src="" alt="Book Cover" class="w-full h-80 object-cover mb-4 rounded-lg">
            <h2 id="modalTitle" class="text-2xl font-bold mb-2"></h2>
            <p id="modalBrief" class="text-gray-600"></p>
        </div>
    </div>
</div>

<script>
    function openModal(title, coverImage, tag, author, brief) {
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalCoverImage').src = coverImage;
        document.getElementById('modalBrief').innerText = brief;
        document.getElementById('bookModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('bookModal').classList.add('hidden');
    }
</script>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>
