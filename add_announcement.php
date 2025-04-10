<?php
session_start();
include 'db_connect.php'; // Make sure your database connection details are correct

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    // Sanitize the data to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);
    $date = mysqli_real_escape_string($conn, $date);

    // SQL query to insert the new announcement into the database
    $query = "INSERT INTO announcements (title, content, created_at) VALUES ('$title', '$content', '$date')";
    
    // Execute the query
    if ($conn->query($query) === TRUE) {
        // Redirect to the admin panel with a success status
        header('Location: admin.php?status=success');
        exit();
    } else {
        // Handle the error if the query fails
        echo "Error: " . $conn->error;
    }
}
?>
