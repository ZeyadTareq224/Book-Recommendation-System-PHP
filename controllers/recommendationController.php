<?php
session_start();
include_once '../includes/config.php';
include_once '../models/User.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['user'])) {
    header("Location: ../pages/login.php");
    exit;
}

// Create a User object
$user = new User($conn);

// Decode the user's tags from the session
$userTags = isset($_SESSION['user']['tags']) ? json_decode($_SESSION['user']['tags'], true) : [];



// Fetch recommended books based on user's tags
try {
    $recommendedBooks = $user->getRecommendedBooks($userTags);
    
    // Debug: Output recommended books
    
} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
    exit;
}

// Include the view to display the recommended books
include_once '../pages/recommendations.php';
?>