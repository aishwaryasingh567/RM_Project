<?php
include("db/dbconn.php");
$student_id = "SELECT * FROM `students_events` WHERE `event_id` = '".$_GET["event_id"]."'";
$student_id = mysqli_query($conn,$student_id);
$idselect =array();
$i =0;
while($student_ids = mysqli_fetch_array($student_id)){
    $idselect[$i] = $student_ids["students_id"];
    $i++;
}
$student_id ="('" . implode("','", $idselect) . "')";
$student_id = "SELECT * FROM `students` WHERE `Id` IN $student_id";
$fstudent_id = mysqli_query($conn,$student_id);
$sstudent_id = mysqli_query($conn,$student_id);
$tstudent_id = mysqli_query($conn,$student_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <!-- </head> -->

    <!-- <head> -->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(//www.presentationmagazine.com/images3/subtle-waves468.jpg);
            background-image: url(https://www.imageshine.in/uploads/gallery/geometric-Blue-Wallpaper-Free-Download.jpg);
            background-color: #f4f4f4;
            background-position: center;
            background-size: cover;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            width: 380px;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 60px rgba(0, 0, 0, 0.1);
        }

        label {
            width: 100%;
            display: block;
            margin-bottom: 2px;

        }

        input {
            width: 100%;
            padding: 10px;
            font-size: medium;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
            cursor: pointer;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">

        <form id="addpoint">


            <label for="name">First price Particpants Name:</label>
            <select
                style="width: 330px; padding-top: 14px; padding-bottom: 14px; border-left: 2px solid black ; border-top:2px solid black; border-right: 2px solid grey; border-bottom: 2px solid grey; border-radius: 5px;"
                name="fsn" id="dog-names">
            <?php while($fp = mysqli_fetch_array($fstudent_id)){ ?>
                <option value="<?=$fp["Id"]?>"><?=$fp["Name"]?></option>
                <?php }?>
            </select>
            <label style="margin-top: 10px;" for="password" name="action">Point</label>
            <input type="number" name="fpoint" required>
            <label for="name">Second price Particpants Name:</label>
            <select
                style="width: 330px; padding-top: 14px; padding-bottom: 14px; border-left: 2px solid black ; border-top:2px solid black; border-right: 2px solid grey; border-bottom: 2px solid grey; border-radius: 5px;"
                name="ssn" id="dog-names">
                <?php while($fp = mysqli_fetch_array($sstudent_id)){ ?>
                <option value="<?=$fp["Id"]?>"><?=$fp["Name"]?></option>
                <?php }?>
            </select>
            </select>
            <label style="margin-top: 10px;" for="password" name="action">Point</label>
            <input type="number" name="spoint" required>
            <label for="name">Third price Particpants Name:</label>
            <select
                style="width: 330px; padding-top: 14px; padding-bottom: 14px; border-left: 2px solid black ; border-top:2px solid black; border-right: 2px solid grey; border-bottom: 2px solid grey; border-radius: 5px;"
                name="tsn" id="dog-names">
                <?php while($fp = mysqli_fetch_array($tstudent_id)){ ?>
                <option value="<?=$fp["Id"]?>"><?=$fp["Name"]?></option>
                <?php }?>
            </select>
            </select>
            <label style="margin-top: 10px;" for="password" name="action">Point</label>
            <input type="number" name="tpoint" required>
            <br>
            <button style="margin-top: 10px;" type="submit">Submit</button>
            <br>

        </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
    $("#addpoint").on('submit', function (e) {
      e.preventDefault();
      console.log("Form submitted");
      $.ajax({
        type: 'POST',
        url: 'add_eventb.php', // Corrected URL
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          console.log("Response received:", response);
          if (response.trim() === 'ok') {
            console.log("Window closing...");
            window.close();
          }else{
            alert(response.trim());

          }
        }
      });
    });
  });
  
</script>
</html>