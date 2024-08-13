<?php
include("db/dbconn.php"); 
$sql = "SELECT * FROM `events`";
$result = mysqli_query($conn,$sql);

?>