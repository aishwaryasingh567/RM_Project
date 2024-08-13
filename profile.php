<?php
include("layouts/header.php");
include("profileb.php");    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <title>Profile</title>

    <style>
        .back {
            margin: 7px;
            padding: 7px;
            width: 100%;
            height: 100%;
            font-family: sans-serif;
            background-image: url(images/c2.jpg);
            background-size: cover;
            background-position: center;
        }

        .sign-up-form {
            width: 600px;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
            background: transliterator_create;
            /* border-radius: 20px; */
            padding: 20px;
            margin: 8% auto;
            text-align: center;

        }

        .sign-up-form h1 {
            color: #1c8adb;
            margin-bottom: 30px;
        }

        .input-box {
            border-radius: 20px;
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #999;
            outline: none;

        }
        .box{
            border-radius: 20px;
            padding: 10px;
            margin: 10px 0;
            width: 400px;
            border: 1px solid #999;
            outline: none;

        }

        button {
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            font-size: 15px;
            margin: 9px 0;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .signup-btn {
            background-color: #1c8adb;
        }

        a {
            text-decoration: none;
            color: white;
        }

        hr {
            margin-top: 20px;
            width: 80%;
        }

        img {
            width: 70px;
            margin-top: -50px;

        }
    </style>
</head>

<body>
    <div class="back">
        <div class="sign-up-form">
            <h1>Profile</h1>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><div class="box"><?=$row["name"]?></div></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><div class="box"><?=$row["email"]?></div></td>
                    </tr>
                    <tr>
                        <td>College:</td>
                        <td><div class="box"><?=$row["college"]?></div></td>
                    </tr>
                    <tr>
                        <td>Contact NO:</td>
                        <td><div class="box"><?=$row["phone"]?></div></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td><button class="signup-btn"><a href="logout.php"> logout </a></button></td>
                    </tr>
                </table>
        </div>
        <?php include("layouts/footer.php"); ?>
    </div>

</body>

</html>