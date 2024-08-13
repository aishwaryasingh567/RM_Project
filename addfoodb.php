<?php
include("db/dbconn.php");


// Function to get the last image filename
function getLastImageFilename($conn) {
    $sql = "SELECT image FROM `food` ORDER BY image DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["image"];
    } else {
        return "img-0000000.jpg"; // Default if no image exists
    }
}

// Function to increment the filename
function incrementFilename($filename) {
    $num = intval(substr($filename, 4, 7)) + 1;
    return "img-" . sprintf("%07d", $num) . ".jpg";
}

// Function to save new image and update database
function saveNewImage($conn, $imagePath) {
    $lastFilename = getLastImageFilename($conn);
    $newFilename = incrementFilename($lastFilename);

    // Move the uploaded image to the image folder
    $targetDir = "food_image/";
    $targetFile = $targetDir . basename($_FILES["food_image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $newImagePath = $targetDir . $newFilename;

    if (move_uploaded_file($_FILES["food_image"]["tmp_name"], $newImagePath)) {
        // Insert new filename into database
        $name = $_POST["food_name"];
        $description = $_POST["food_description"];
        $price = $_POST["food_price"];
        $sponcer_id = $_POST["sponcer_id"];

        $sql = "INSERT INTO `food`(`name`,`sponcer_id`, `description`, `image`,`price`) VALUES ('$name','$sponcer_id','$description','$newFilename','$price')";
        if ($conn->query($sql) === TRUE) {
           echo "ok";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Check if form submitted with file
if (isset($_POST["food_name"])) {
    $conn->begin_transaction();
    saveNewImage($conn, $_FILES["food_image"]["tmp_name"]);
    $conn->commit();
}

$conn->close();
?>
