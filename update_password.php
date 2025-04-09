<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = $conn->prepare("UPDATE users SET password = ?, otp = NULL, otp_expiry = NULL WHERE email = ?");
    $query->execute([$password, $_SESSION['email']]);

    session_destroy();
    echo "Password updated successfully!";
    header("Location: login.php");
}
?>
