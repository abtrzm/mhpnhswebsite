<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    $hashed = password_hash($input, PASSWORD_DEFAULT);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Hash Generator</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        input { width: 300px; padding: 10px; margin: 10px; }
        button { padding: 10px 20px; cursor: pointer; }
        pre { background: #f4f4f4; padding: 10px; display: inline-block; text-align: left; }
    </style>
</head>
<body>
    <h2>PHP Default Hash Generator</h2>
    <form method="POST">
        <input type="text" name="input" placeholder="Enter text..." required>
        <button type="submit">Generate Hash</button>
    </form>

    <?php if (isset($hashed)): ?>
        <h3>Generated Hash</h3>
        <pre><?php echo $hashed; ?></pre>
    <?php endif; ?>
</body>
</html>
