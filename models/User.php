<?php
class User {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($username, $email, $password, $tags) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (username, email, password, tags) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$username, $email, $hashedPassword, json_encode($tags)]);
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }

    public function getRecommendedBooks($userTags) {
        if (empty($userTags)) {
            return [];
        }
    
        // Create placeholders for the query
        $placeholders = implode(',', array_fill(0, count($userTags), '?'));
    
        // Prepare SQL query to fetch books matching any of the user's tags
        $sql = "SELECT id, title, tag, cover_image, author, book_brief FROM books WHERE tag IN ($placeholders)";
        $stmt = $this->conn->prepare($sql);
    
        // Bind the tag values to the placeholders
        $stmt->execute($userTags);
    
        // Fetch the books
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
