<?php
include("db/dbconn.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$sql = "SELECT * FROM `students` WHERE `email` = '".$_SESSION["email"]."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$event_id = $row["Id"];
$event_id = "SELECT * FROM `students_events` WHERE `students_id` = '$event_id'";
$event_id = mysqli_query($conn,$event_id);
$idselect =array();
$i =0;
while($event_ids = mysqli_fetch_array($event_id)){
    $idselect[$i] = $event_ids["event_id"];
    $i++;
}
$event_id ="('" . implode("','", $idselect) . "')";
$event_id = "SELECT * FROM `events` WHERE `id` IN $event_id";
$event_id = mysqli_query($conn,$event_id);
?>