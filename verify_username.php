<?php
session_start();
include 'db_connect.php'; // Your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $query = $conn->prepare("SELECT email FROM users WHERE username = ?");
    $query->execute([$username]);
    $user = $query->fetch();

    if ($user) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $user['email'];
        header("Location: enter_email.php");
        exit();
    } else {
        $_SESSION['error'] = "Username cannot be found.";
    }
}
?>
