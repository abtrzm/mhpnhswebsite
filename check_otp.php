<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];

    // Only check if OTP matches, ignore expiry
    $query = $conn->prepare("SELECT otp FROM users WHERE email = ? AND otp = ?");
    $query->bind_param("ss", $_SESSION['email'], $otp);
    $query->execute();

    // Bind result variables
    $query->bind_result($db_otp);
    
    if ($query->fetch()) { // ✅ If OTP matches
        $_SESSION['otp_verified'] = true;
        header("Location: reset_password.php");
        exit();
    } else {
        echo "Invalid OTP.";
    }
    
    $query->close();
}
?>
