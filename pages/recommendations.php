<?php
require_once dirname(__DIR__) . '/includes/config.php';
require_once BASE_PATH . '/controllers/recommendationController.php';
include_once BASE_PATH . '/includes/header.php';
?>

<div class="container">
    <h1>Recommended Books</h1>

    <?php
    // Debug: Output number of recommended books
    echo "<p>Number of Recommended Books: " . (isset($recommendedBooks) ? count($recommendedBooks) : 0) . "</p>";
    ?>

    <?php if (!empty($recommendedBooks)): ?>
        <div class="book-grid">
            <?php foreach ($recommendedBooks as $book): ?>
                <div class="book-card">
                    <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                    <span class="tag-card"><?php echo htmlspecialchars($book['tag']); ?></span>
                    <!-- If you have more book details, you can add them here -->
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No recommended books found based on your selected tags.</p>
    <?php endif; ?>
</div>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>