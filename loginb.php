<?php
include("db/dbconn.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
    $_SESSION["usertype"] = $_POST["role_select"];
    if(isset($_POST["stemail"])){
        $email = $_POST["stemail"]; 
        $sql="SELECT * FROM `students` WHERE `email`='$email'";
    }elseif(isset($_POST["spemail"])){
        $email = $_POST["spemail"]; 
        $sql="SELECT * FROM `sponcer` WHERE `email`='$email'";
    }elseif(isset($_POST["temail"])){
        $email = $_POST["temail"]; 
        $sql="SELECT * FROM `teachers` WHERE `email`='$email'";
    }else{
        $email = $_POST["aemail"]; 
        $sql="SELECT * FROM `acdemics` WHERE `email`='$email'";
    }
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_array($result);
        if($password == $row["password"]){
            $_SESSION["email"] = $email;
            echo"ok";
        }else{
            echo "incorrect password";
        }
    }else{
        echo "incorrect email";
    }
}

?>