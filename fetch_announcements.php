<?php
include 'db_connect.php';

// Error handling for the database query
$query = "SELECT * FROM announcements ORDER BY created_at DESC";
$result = $conn->query($query);

// Check if the query executed successfully
if (!$result) {
    die("Error fetching announcements: " . $conn->error);
}

$announcements = [];

// Fetching the rows and storing them in an array
while ($row = $result->fetch_assoc()) {
    $row['created_at'] = date('F j, Y', strtotime($row['created_at'])); // Format: "Month day, Year"

    $announcements[] = $row;
}

// Return the results as a JSON object
echo json_encode($announcements);

// Close the database connection
$conn->close();
