<?php
session_start();
include 'db_connect.php'; // Database connection
require 'mailer.php'; // PHPMailer setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $query = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows === 0) {
        echo "Email does not match our records.";
        exit();
    }

    // Generate OTP and set expiry
    $otp = rand(100000, 999999);
    $expiry = date("Y-m-d H:i:s", strtotime("+10 minutes"));

    // Update the OTP in the database
    $updateQuery = $conn->prepare("UPDATE users SET otp = ?, otp_expiry = ? WHERE email = ?");
    $updateQuery->bind_param("sss", $otp, $expiry, $email);
    $updateQuery->execute();

    // Send OTP to email
    $subject = "Your OTP Code";
    $message = "Your OTP code is: " . $otp;
    sendMail($email, $subject, $message);

    $_SESSION['otp_sent'] = true;
    $_SESSION['email'] = $email; // Store email in session for verification step

    header("Location: verify_otp.php");
    exit();
}
?>
