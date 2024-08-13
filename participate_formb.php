<?php
include("db/dbconn.php");
if(isset($_POST["event_id"])){
    $event_id = $_POST["event_id"];
    $student_id = $_POST["student_id"];
    $sql = "INSERT INTO `students_events` (`event_id`, `students_id`) VALUES ('$event_id', '$student_id')";
    $updateevent = "UPDATE `events` SET `participants` = `participants` + 1 WHERE `id` = '$event_id'";
    if(mysqli_query($conn,$sql)){
        if(mysqli_query($conn,$updateevent)){
        echo "ok";
        }
    }else{
        echo $conn->error;
    }
}

?>