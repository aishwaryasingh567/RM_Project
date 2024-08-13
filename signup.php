<?php include ("layouts/header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <title>Signup Form</title>

    <style>
        .back {
            margin: 7px;
            padding: 7px;
            width: 100%;
            height: 100%;
            font-family: sans-serif;
            background-color:#D3D4D9;
            background-size: cover;
            background-position: center;
        }

        .hidden {
            display: none;
        }

        .signup-form {
            width: 600px;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
            background: transliterator_create;
            /* border-radius: 20px; */
            padding: 20px;
            margin: 8% auto;
            text-align: center;
            background-color:#051019;
            opacity: 0.8;

        }

        .signup-form h1 {
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#role-select").change(function () {
            var selectedRole = $(this).val();
            $(".signup-section").addClass("hidden");
            $("#" + selectedRole).removeClass("hidden");
        });

        $(".signup-form .registration").submit(function (e) {
            e.preventDefault();
            console.log("Form submitted"); // Log message to ensure the form submission event is triggered
            $.ajax({
                type: 'POST',
                url: 'signupb.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    console.log("Response received:", response); // Log the response received from the server
                    if (response.trim() === 'ok') { // Trim the response to remove any whitespace
                        window.location.href = "index.php";
                    } else if (response.trim() === 'user already exists') {
                        alert("User already exists");
                    }
                }
            });
        });
    });

</script>

<body>
    <div class="back">
        <div class="signup-form">
            <h1>Signup</h1>
            <select id="role-select" class="input-box">
                <option value="select" selected>Select Role</option>
                <option value="signup-student">Student</option>
                <option value="signup-teacher">Teacher</option>
                <option value="signup-academic">Academic</option>
                <option value="signup-sponsor">Sponsor</option>
            </select>
            <div class="signup-section hidden" id="signup-student">
                <form id="registration-student" class="registration" method="post">
                    <input type="text" value="student" name="role-select" hidden required>
                    <input type="text" name="first_name" class="input-box" placeholder="First Name" required><br>
                    <input type="text" name="last_name" class="input-box" placeholder="Last Name" required><br>
                    <input type="text" name="roll_number" class="input-box" placeholder="Roll Number " required><br>
                    <input type="text" name="e_number" class="input-box" placeholder="Enroll Number" required><br>
                    <input type="email" name="email" class="input-box" placeholder="Email" required><br>
                    <input type="text" name="college" class="input-box" placeholder="College" required><br>
                    <input type="text" name="contact" class="input-box" placeholder="Contact No" required><br>
                    <input type="password" name="password" class="input-box" placeholder="Password" required><br>
                    <button type="submit" class="signup-btn">Signup</button>
                </form>
            </div>
            <div class="signup-section hidden" id="signup-teacher">
                <form id="registration-teacher" class="registration" method="post">
                <input type="text" value="teacher" name="role-select" hidden required>
                    <input type="text" name="first_name" class="input-box" placeholder="First Name" required><br>
                    <input type="text" name="last_name" class="input-box" placeholder="Last Name" required><br>
                    <input type="text" name="teacher_id" class="input-box" placeholder="Teacher Id" required><br>
                    <input type="email" name="email" class="input-box" placeholder="Email" required><br>
                    <input type="text" name="college" class="input-box" placeholder="College" required><br>
                    <input type="text" name="contact" class="input-box" placeholder="Contact No" required><br>
                    <input type="password" name="password" class="input-box" placeholder="Password" required><br>
                    <button type="submit" class="signup-btn">Signup</button>
                </form>
            </div>
            <div class="signup-section hidden" id="signup-academic">
                <form id="registration-academic" class="registration" method="post">
                <input type="text" value="academic" name="role-select" hidden required>
                    <input type="text" name="college_name" class="input-box" placeholder="College Name" required><br>
                    <input type="text" name="college_id" class="input-box" placeholder="College Id" required><br>
                    <input type="email" name="email" class="input-box" placeholder="Email" required><br>
                    <input type="text" name="contact" class="input-box" placeholder="Contact No" required><br>
                    <input type="password" name="password" class="input-box" placeholder="Password" required><br>
                    <button type="submit" class="signup-btn">Signup</button>
                </form>
            </div>
            <div class="signup-section hidden" id="signup-sponsor">
                <form id="registration-sponsor" class="registration" method="post">
                <input type="text" value="sponcer" name="role-select" hidden required>
                    <input type="text" name="sponcer_name" class="input-box" placeholder="Sponcer Name" required><br>
                    <input type="text" name="sponcer_id" class="input-box" placeholder="Registration Number" required><br>
                    <input type="email" name="email" class="input-box" placeholder="Email" required><br>
                    <input type="text" name="contact" class="input-box" placeholder="Contact No" required><br>
                    <input type="password" name="password" class="input-box" placeholder="Password" required><br>
                    <button type="submit" class="signup-btn">Signup</button>
                </form>
            </div>
        </div>
    </div>

    <?php include ("layouts/footer.php"); ?>
</body>

</html>