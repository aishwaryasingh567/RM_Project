<?php

include("db/dbconn.php");

// Function to get the last image filename
function getLastImageFilename($conn) {
    $sql = "SELECT image FROM food ORDER BY image DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["image"];
    } else {
        return "img-0000000.jpg"; // Default if no image exists
    }
}

// Function to increment the filename
$filename = "food_image/chicken-chow-mein-gog-3.jpg";
function incrementFilename($filename) {
    $num = intval(substr($filename, 4, 7)) + 1;
    return "img-" . sprintf("%07d", $num) . ".jpg";
}

// Function to save new image and update database
function saveNewImage($conn, $imagePath) {
    $lastFilename = getLastImageFilename($conn);
    $newFilename = incrementFilename($lastFilename);
    $imagePath = "food_image/chicken-chow-mein-gog-3.jpg";
    // Move the image to the image folder
    $newImagePath = "food_image/" . $newFilename;
    rename($imagePath, $newImagePath);

    // Insert new filename into database
    $sql = "INSERT INTO food (`name`,`description`,`image`) VALUES ('chicken chow','A delectable vegetarian paneer dish in a flavorful gravy.','$newFilename')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Usage example
$imagePath = "path_to_new_image.jpg";
saveNewImage($conn, $imagePath);

$conn->close();

?>
