<?php
// Include database connection
include('db_connect.php');

// Start session
session_start();

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Use a prepared statement to prevent SQL injection
$query = "SELECT * FROM users WHERE username = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if user exists
if ($user = mysqli_fetch_assoc($result)) {
    // Verify password
    if (password_verify($password, $user['password'])) {
        // Store user data in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Determine user role (assuming user type is stored in 'role' column)
        if ($user['role'] == 'student') {
            header("Location: prototype.php");
        } elseif ($user['role'] == 'admin') {
            header("Location: admin.html");
        } else {
            header("Location: login.php");
        }
        exit();
    }
}

// If login fails
header("Location: login.php?error=invalid_credentials");
exit();
?>
