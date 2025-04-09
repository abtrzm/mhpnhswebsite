<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="icon" href="img/mhpnhslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/forgotpass.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="forgot-box">
        <h2>Verify OTP</h2>
        <p>Enter the OTP sent to your email.</p>
        <form action="check_otp.php" method="POST">
            <div class="input-group">
                <i class="fas fa-key"></i>
                <input type="text" name="otp" placeholder="Enter OTP" required>
            </div>
            <button type="submit" class="btn">Verify</button>
        </form>
        <a href="enter_email.php" class="back-link">← Resend OTP</a>
    </div>
</div>

</body>
</html>
