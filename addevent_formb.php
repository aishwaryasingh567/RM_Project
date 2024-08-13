<?php
include("db/dbconn.php");


// Function to get the last image filename
function getLastImageFilename($conn) {
    $sql = "SELECT image FROM `events` ORDER BY image DESC LIMIT 1";
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
    $targetDir = "event_image/";
    $targetFile = $targetDir . basename($_FILES["event_image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $newImagePath = $targetDir . $newFilename;

    if (move_uploaded_file($_FILES["event_image"]["tmp_name"], $newImagePath)) {
        // Insert new filename into database
        $name = $_POST["event_name"];
        $description = $_POST["event_description"];
        $point = $_POST["event_credit"];
        $date = $_POST["event_date"];
        $coordinator = $_POST["event_coordinator"];
        $registration_start = $_POST["event_start"];
        $registration_end = $_POST["event_end"];
        $teacher_id = "SELECT * FROM `teachers` WHERE `Id`= '$coordinator'";
        $teacher_id = mysqli_query($conn,$teacher_id);
        $teacher_id = mysqli_fetch_array($teacher_id);
        $teacher_name = $teacher_id["Name"];
        
        $sql = "INSERT INTO `events`(`name`, `description`, `image`, `point`,`coordinator`, `registration_start`, `registration_end`, `date`) VALUES ('$name','$description','$newFilename','$point','$teacher_name','$registration_start','$registration_end','$date')";
        if ($conn->query($sql) === TRUE) {
            $event_id = $conn->insert_id;
            $teacher_point = "UPDATE `teachers` SET `point` = '10000', `distributed_point` = '$point' WHERE `Id` = '$coordinator'";
            $teachertable = "INSERT INTO `teachers_events` (`event_id`, `teachers_id`) VALUES ('$event_id', '$coordinator')";
            if ($conn->query($teachertable) === TRUE) {
                if ($conn->query($teacher_point) === TRUE) {
            echo "ok";
                }
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Check if form submitted with file
if (isset($_POST["event_name"])) {
    $conn->begin_transaction();
    saveNewImage($conn, $_FILES["event_image"]["tmp_name"]);
    $conn->commit();
}

$conn->close();
?>
