<?php
include("db/dbconn.php");
session_start();
$student_id = "SELECT * FROM `students` WHERE `email` = '" . $_SESSION['email'] . "'";
$student_id = mysqli_query($conn,$student_id);
$student_id = mysqli_fetch_array($student_id);
$event_id = "SELECT * FROM `events` WHERE `id` = '".$_GET["id"] ."'";
$event_id = mysqli_query($conn,$event_id);
$event_id = mysqli_fetch_array($event_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://www.imageshine.in/uploads/gallery/geometric-Blue-Wallpaper-Free-Download.jpg);
            background-color: #f4f4f4;
            background-position: center;
            background-size: cover;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; /* Remove default body margin */
        }

        .container {
            background-color: #fff;
            width: 90%; /* Adjusted width for responsiveness */
            max-width: 400px; /* Set maximum width */
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 60px rgba(0, 0, 0, 0.1);
        }

        label {
            width: 100%;
            display: block;
            margin-bottom: 2px;
        }

        input,
        select,
        button {
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

        /* Media Query for responsiveness */
        @media (min-width: 768px) {
            .container {
                width: 70%; /* Adjusted width for larger screens */
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <form id="addeventform">
            <label for="name">Event Name:</label>
            <input type="text" name="event_name" value="<?=$event_id["name"]?>" readonly>
            <label name="task_name">Event Coordinator:</label>
            <input type="text" value="<?=$event_id["coordinator"]?>" readonly>
            
            <label style="margin-top: 10px;" for="action">Event Description:</label>
            <input type="text" value="<?=$event_id["description"]?>" readonly>

            <label style="margin-top: 10px;" for="action">Event date:</label>
            <input type="date" name="event_date" value="<?=$event_id["date"]?>" readonly>

            <label style="margin-top: 10px;" for="action">Event Credit:</label>
            <input type="text" name="event_credit" value="<?=$event_id["point"]?>" readonly>
            <input type="text" name="event_id" value="<?=$event_id["id"]?>" hidden required>
            <input type="text" name="student_id" value="<?=$student_id["Id"]?>" hidden required>
            <button style="margin-top: 10px;" type="submit">Submit</button>

        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    $("#addeventform").on('submit', function (e) {
      e.preventDefault();
      console.log("Form submitted");
      $.ajax({
        type: 'POST',
        url: 'participate_formb.php', // Corrected URL
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
