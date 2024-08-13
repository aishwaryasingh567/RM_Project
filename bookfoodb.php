<?php
    include("db/dbconn.php");
    session_start();
    $up = "UPDATE `students` SET `point` = `point` - '".$_POST["dp"]."' WHERE `email` = '".$_SESSION['email']."'";
    $up = mysqli_query($conn,$up);
    echo "ok"; 
?>