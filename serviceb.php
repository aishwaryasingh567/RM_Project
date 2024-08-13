<?php

include("db/dbconn.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$sql = "SELECT * FROM `events`";
$result = mysqli_query($conn, $sql);
