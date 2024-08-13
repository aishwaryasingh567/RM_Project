<?php

if (isset($_POST["userName"])) {
    $username = $_POST["userName"];
    $useremail = $_POST["userEmail"];
    $userphone = $_POST["userPhone"];
    $usermsg = $_POST["userMsg"];
    $subject = "User Query";
    $body = "Hello Aishwara Singh,

        $usermsg
        Best regards,
        $username";
    $headers = "From: shahid576ali@gmail.com";

    if (mail($headers, $subject, $body, $useremail)) {
        echo "ok";

    } else {
        echo "Not";
        exit();
    }
}
?>