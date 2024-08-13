<?php
include("db/dbconn.php");

// Function to save new image and update database
function saveImage($conn) {
    // Check if file is uploaded
    echo "Value of food_image name: " . $_FILES["food_image"]["name"];
    $name = $_POST["food_name"];
        $description = $_POST["food_description"];
        $price = $_POST["food_price"];
        $food_id = $_POST["food_id"];
    if (!empty($_FILES["food_image"]["name"])) {
        
        $image = '';
        echo "Value of food_image name: " . $_FILES["food_image"]["name"];
        // Check if there is a file upload
        if (!empty($_FILES["food_image"]["name"])) {
            // Get the filename of the last uploaded image
            $sql = "SELECT image FROM `food` WHERE `id` = '$food_id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $image = $row["image"];
            }

            // Upload the new image if there is one
            $targetDir = "food_image/";
            $targetFile = $targetDir . basename($_FILES["food_image"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $newImagePath = $targetDir . $image;

            // Check if the image file is a valid image file
            if (getimagesize($_FILES["food_image"]["tmp_name"])) {
                // Move the uploaded image to the image folder
                if (move_uploaded_file($_FILES["food_image"]["tmp_name"], $newImagePath)) {
                    echo "Image uploaded successfully.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "File is not an image.";
            }
        }
        
        // Update database with new values
        
    }
    $sql = "UPDATE `food` SET `name`='$name', `description`='$description', `price`='$price' WHERE `id`='$food_id' ";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $conn->error;
        }
}

// Check if form submitted
if (isset($_POST["food_name"])) {
    saveImage($conn);
}

$conn->close();
?>
