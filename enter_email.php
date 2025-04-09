<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/forgotpass.css"> <!-- Include your CSS file -->
    <link rel="icon" href="img/mhpnhslogo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="forgot-box">
            <h2>Forgot Password</h2>
            <p>Enter your email for the OTP</p>
            <form action="send_otp.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>
                <button type="submit" class="btn">Send OTP</button>
            </form>
            <a href="forgot_password.php" class="back-link">← Back</a>
        </div>
    </div>

</body>

</html>