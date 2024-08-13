<?php
include("db/dbconn.php");
if(isset($_POST["fsn"])){
    $fsql = "UPDATE `students` SET `point` =`point`+ '".$_POST["fpoint"]."' WHERE `Id` = '".$_POST["fsn"]."'";
    $ssql = "UPDATE `students` SET `point` = `point`+'".$_POST["spoint"]."' WHERE `Id` = '".$_POST["ssn"]."'";
    $tsql = "UPDATE `students` SET `point` =`point`+ '".$_POST["tpoint"]."' WHERE `Id` = '".$_POST["tsn"]."'";
    if(mysqli_query($conn,$fsql)){
        if(mysqli_query($conn,$ssql)){
            if(mysqli_query($conn,$tsql)){
                echo "ok";
            }
        }
    }
}
?>