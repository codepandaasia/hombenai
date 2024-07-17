<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>හොම්බෙන් AI</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="https://www.imagella.com/cdn/shop/products/34ac0e34c7e79e1ce362b3448bb24ab0.jpg?v=1692684233&width=300" alt="Logo" class="logo-image">
        <h1>හොම්බෙන් AI - JUST FOR FUN</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="fileToUpload" class="file-label">ඔබේ හරකාගේ ෆොටෝ එක සහ ඔබේ විස්තර මෙහි අප්ලෝඩ් කරන්න</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="file-input" required>
            <input type="submit" value="Upload Image" name="submit" class="submit-btn">
        </form>

        <h2>Check if Photo is Stolen</h2>
        <form action="check.php" method="post" enctype="multipart/form-data" class="check-form">
            <label for="check_file" class="file-label">උස්සපු හරකෙක්දයි බලන්න</label>
            <input type="file" name="check_file" id="check_file" class="file-input" required>
            <input type="submit" value="Check Image" name="submit" class="submit-btn">
        </form>
    </div>
</body>
</html>
