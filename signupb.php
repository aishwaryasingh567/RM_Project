<?php
include ("db/dbconn.php");
session_start();
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];
    $_SESSION["usertype"] = $_POST["role-select"];
    if (isset($_POST["college_id"])) {
        $college = $_POST["college_name"];
        $college_id = $_POST["college_id"];
        $sql = "SELECT * FROM `acdemics` WHERE `email`='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "user all ready exist";
        } else {
            $sql = "INSERT INTO `acdemics`(`college_id`, `Name`, `email`, `password`, `phone`) VALUES ('$college_id','$college','$email','$password','$contact')";
            $result = mysqli_query($conn, $sql);
            $_SESSION["email"] = $email;
            echo "ok";
        } 
    } elseif (isset($_POST["teacher_id"])) {
        $college = $_POST["college"];
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];
        $teacher_id = $_POST["teacher_id"];
        $name = $firstname . " " . $lastname;
        $sql = "SELECT * FROM `teachers` WHERE `email`='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "user all ready exist";
        } else {
            $sql = "INSERT INTO `teachers`(`teacher_id`, `Name`,`email`, `password`, `phone`, `college`) VALUES ('$teacher_id','$name','$email','$password','$contact','$college')";
            $result = mysqli_query($conn, $sql);
            $_SESSION["email"] = $email;
            echo "ok";
        }
    } elseif (isset($_POST["sponcer_id"])) {
        $sponcer_name = $_POST["sponcer_name"];
        $sponcer_id = $_POST["sponcer_id"];
        $sql = "SELECT * FROM `sponcer` WHERE `email`='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "user all ready exist";
        } else {
            $sql = "INSERT INTO `sponcer`(`gst_id`, `Name`, `email`, `password`, `phone`) VALUES ('$sponcer_id','$sponcer_name','$email','$password','$contact')";
            $result = mysqli_query($conn, $sql);
            $_SESSION["email"] = $email;
            echo "ok";
        }
    } else {
        $rollnumber = $_POST["roll_number"];
        $enumber = $_POST["e_number"];
        $college = $_POST["college"];
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];
        $name = $firstname . " " . $lastname;
        $sql = "SELECT * FROM `students` WHERE `email`='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "user all ready exist";
        } else {
            $sql = "INSERT INTO `students` ( `roll_number`, `enumber`, `name`, `email`, `password`, `phone`, `college`) VALUE('$rollnumber','$enumber','$name','$email','$password','$contact','$college')";
            $result = mysqli_query($conn, $sql);
            $_SESSION["email"] = $email;
            echo "ok";
        }
    }

}
?>