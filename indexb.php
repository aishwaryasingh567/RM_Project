<?php
include("db/dbconn.php");


$sql = "SELECT * FROM food";
$result = mysqli_query($conn,$sql);

?>