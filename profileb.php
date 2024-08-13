<?php
include("db/dbconn.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$sql = "SELECT * FROM `users` WHERE `email` = '".$_SESSION["email"]."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>