<?php
include("layouts/header.php");
?><br><br>
<style>
    body {
        background-color: #D3d4d9;
        background-repeat: no-repeat;
        background-size: 100% 800px;
    }
    
    
    .simple-form {
        text-align: center;
        margin: 70px 400px;
    }
    .hidden {
        display: none;
    }
    .registration {
        width: 100%;
        background-color: #051019;
        opacity: 0.8;
        padding: 50px 0px;
    }

    .button {
        width: 250px;
        padding: 10px;
        border-radius: 5px;
        outline: 0px;

    }

    .butt {
        font-size: 20px;
        color: white;
        width: 250px;
        padding: 10px;
        border-radius: 5px;
        outline: 0px;
        background-color: #0c6996;
        border: 2px solid:#0101c;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#role-select").change(function () {
            var selectedRole = $(this).val();
            $(".simple-form").addClass("hidden");
            $("#" + selectedRole).removeClass("hidden");
        });

        $(".registration").submit(function (e) {
            e.preventDefault();
            console.log("Form submitted"); // Log message to ensure the form submission event is triggered
            $.ajax({
                type: 'POST',
                url: 'loginb.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    console.log("Response received:", response); // Log the response received from the server
                    if (response.trim() === 'ok') { // Trim the response to remove any whitespace
                        window.location.href = "index.php";
                    } else if (response.trim() === 'incorrect password') {
                        alert("incorrect password");
                    } else if (response.trim() === 'incorrect email') {
                        alert("incorrect email");
                    }
                }
            });
        });
    });
</script>

<div class="simple-form" id="login-type">
    <div class="registration">
    <h2>
        <font face="Calibri" color="white"><i>Select Your Role</i></font>
    </h2>
    <br>
    <select id="role-select" class="button">
        <option value="select" selected>Select</option>
        <option value="login-teacher">Teacher</option>
        <option value="login-student">Student</option>
        <option value="login-academic">Academic</option>
        <option value="login-sponsor">Sponsor</option>
    </select>
    </div>
</div>

<div class="simple-form hidden" id="login-teacher">
    <form id="registration-teacher" class="registration" method="post">
        <input type="text" name="role_select" value="teacher" hidden>
        <h2>
            <font face="Calibri" color="white"><i>Login Form - Teacher</i></font>
        </h2>
        <br>
        <input type="text" name="temail" class="button" placeholder="Enter useremail"><br><br>
        <input type="password" name="password" class="button" placeholder="Enter password"><br><br>
        <button type="submit" class="butt">Login</button>
    </form>
</div>

<div class="simple-form hidden" id="login-student">
    <form id="registration-student" class="registration" method="post">
    <input type="text" name="role_select" value="student" hidden>
        <h2>
            <font face="Calibri" color="white"><i>Login Form - Student</i></font>
        </h2>
        <br>
        <input type="text" name="stemail" class="button" placeholder="Enter useremail"><br><br>
        <input type="password" name="password" class="button" placeholder="Enter password"><br><br>
        <button type="submit" class="butt">Login</button>
        
    </form>
</div>

<div class="simple-form hidden" id="login-academic">
    <form id="registration-academic" class="registration" method="post">
    <input type="text" name="role_select" value="academic" hidden>
    
        <h2>
            <font face="Calibri" color="white"><i>Login Form - Academic</i></font>
        </h2>
        <br>
        <input type="text" name="aemail" class="button" placeholder="Enter useremail"><br><br>
        <input type="password" name="password" class="button" placeholder="Enter password"><br><br>
        <button type="submit" class="butt">Login</button>
        
    </form>
</div>

<div class="simple-form hidden" id="login-sponsor">
    <form id="registration-sponsor" class="registration" method="post">
    <input type="text" name="role_select" value="sponcer" hidden>
    
        <h2>
            <font face="Calibri" color="white"><i>Login Form - Sponsor</i></font>
        </h2>
        <br>
        <input type="text" name="spemail" class="button" placeholder="Enter useremail"><br><br>
        <input type="password" name="password" class="button" placeholder="Enter password"><br><br>
        <button type="submit" class="butt">Login</button>
        
    </form>
</div>

<!-- Add similar hidden forms for signup -->

<?php include "layouts/footer.php"; ?>
