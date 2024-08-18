<?php
$host = 'localhost';
$dbname = 'book_recommendation';
$username = 'root';
$password = '';
define('BASE_URL', '/book-recommendation');
define('BASE_PATH', dirname(__DIR__));

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>