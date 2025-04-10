<?php

session_start();
include 'db_connect.php';

// Fetch all announcements
$query = "SELECT * FROM announcements ORDER BY created_at DESC";
$result = $conn->query($query);

$announcements = [];
while ($row = $result->fetch_assoc()) {
    $announcements[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Announcements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/mhpnhslogo.png" type="image/x-icon">

</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Admin Panel: Manage Announcements</h1>
        <!-- Logout Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>


        <!-- Add Announcement Form -->
        <div class="card mb-5">
            <div class="card-header bg-success text-white">
                Add New Announcement
            </div>
            <div class="card-body">
                <form action="add_announcement.php" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <button type="submit" class="btn btn-success">Add Announcement</button>
                </form>
            </div>
        </div>

        <!-- List of Announcements -->
        <div class="card">
            <div class="card-header bg-success text-white">
                Existing Announcements
            </div>
            <ul class="list-group list-group-flush">
                <?php if (count($announcements) > 0): ?>
                    <?php foreach ($announcements as $announcement): ?>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1"><?= htmlspecialchars($announcement['title']) ?> <small class="text-muted">(<?= date('F j, Y', strtotime($announcement['created_at'])) ?>)</small></h5>
                                    <p class="mb-1"><?= nl2br(htmlspecialchars($announcement['content'])) ?></p>
                                </div>
                                <form action="delete_announcement.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this announcement?');">
                                    <input type="hidden" name="id" value="<?= $announcement['id'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="list-group-item">No announcements found.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</body>

</html>