<?php
include_once '../includes/config.php';
include_once '../models/User.php';

$user = new User($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $tags = $_POST['tags']; // Array of selected tags
        
        if ($user->register($username, $email, $password, $tags)) {
            header("Location: ../pages/login.php");
        } else {
            echo "Registration failed!";
        }
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $loggedInUser = $user->login($email, $password);
        
        if ($loggedInUser) {
            session_start();
            $_SESSION['user'] = $loggedInUser;
            header("Location: ../pages/recommendations.php");
        } else {
            echo "Login failed!";
        }
    }
}
?>
