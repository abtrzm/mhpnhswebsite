<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO announcements (title, subtitle, content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $subtitle, $content);
    $stmt->execute();

    echo "Success";
}
?>
