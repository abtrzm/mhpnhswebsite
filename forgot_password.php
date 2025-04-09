<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : ''; // Store error message
unset($_SESSION['error']); // Clear error after displaying it
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
            <p>Enter your username for verification.</p>

            <!-- Display error message -->
            <?php if (!empty($error)) : ?>
                <div class="error-message">
                    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
                </div>
            <?php endif; ?>


            <form action="verify_username.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Enter Username" required>
                </div>
                <button type="submit" class="btn">Next</button>
            </form>
            <a href="login.php" class="back-link">← Back to Login</a>
        </div>
    </div>

</body>

</html>