<?php
session_start();
if (!isset($_SESSION['otp_verified'])) {
    header("Location: forgot_password.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="icon" href="img/mhpnhslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/forgotpass.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="forgot-box">
        <h2>Reset Password</h2>
        <form action="update_password.php" method="POST">
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="New Password" required>
            </div>
            <button type="submit" class="btn">Reset Password</button>
        </form>
        <a href="login.php" class="back-link">← Back to Login</a>
    </div>
</div>

</body>
</html>

