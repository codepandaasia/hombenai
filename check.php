<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

if (isset($_FILES["check_file"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["check_file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES["check_file"]["tmp_name"]);
    if ($check !== false) {
        // Save the uploaded file temporarily
        if (move_uploaded_file($_FILES["check_file"]["tmp_name"], $target_file)) {
            echo "<script>alert('උස්සපු හරකෙක් රාලහාමි');</script>";
            echo "<h2>උස්සපු හරකෙක් රාලහාමි</h2>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
} else {
    echo "No file was uploaded.";
}
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

if (isset($_FILES["check_file"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["check_file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES["check_file"]["tmp_name"]);
    if ($check !== false) {
        // Save the uploaded file temporarily
        if (move_uploaded_file($_FILES["check_file"]["tmp_name"], $target_file)) {
            echo "<script>alert('උස්සපු හරකෙක් රාලහාමි');</script>";
            echo "<h2>උස්සපු හරකෙක් රාලහාමි</h2>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
} else {
    echo "No file was uploaded.";
}
?>
