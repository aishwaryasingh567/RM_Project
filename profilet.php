<?php
include ("layouts/header.php");
include ("profiletb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VolunteerProfile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(235, 237, 238);
            background-image: url(https://www.imageshine.in/uploads/gallery/Free-photo-abstract-luxury-gradient-blue-Wallpaper-Free-Download.jpg);
            font-family: Arial, sans-serif;
        }
        img {
            height: 25px;
            width: 28px;
        }

        #content {
            margin-left: 0px;
            /* Adjust according to sidebar width */
            padding: 0px;
        }

        #content h1 {
            text-align: center;
            font-weight: bold;
            margin-top: 25px;
            /*creating space on top of container for any requirements needed*/
        }

        .container11 {
            width: 49%;
            float: left;
        }

        .container12 {
            width: 49%;
            float: right;
        }

        .lrow {
            text-align: left;
        }

        .content1 {
            display: flex;
        }

        .container {
            background-color: #DEDFE4;
            width: 90%;
            padding: 20px;
            margin-top: 80px;
            margin-left: 50px;
            overflow-x: auto;
            max-height: auto;
            max-width: 1400px;
            border-radius: 3px;
            display: flex;
            justify-content: space-between;
        }

        .container1,
        .container2 {
            width: 48%;
            /* Adjust width as needed */
        }

        .lrow {
            text-align: right;
        }

        .button {
            background-color: #13960c;
            border: none;
            border-radius: 4px;
            color: white;
            padding: 8px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .content_tasks {
            background-color: #DEDFE4;
            height: auto;
            width: 1050px;
            width: 90%;
            padding: 20px;
            margin-top: 20px;
            margin-left: 50px;
            margin-bottom: 20px;
            overflow-x: auto;
            max-height: auto;
            max-width: 1400px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: white;
        }

        .all-tasks {
            background-color: blue;
            color: white;
        }

        .ongoing-tasks {
            background-color: orange;
            color: white;
        }

        .completed-tasks {
            background-color: green;
            color: white;
        }

        #photo-container {
            width: 300px;
            height: 300px;
            /* Adjust container size as needed *
            border: 2px dashed #ccc;
            /*margin-left: 1100px;*/
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 100%;
            /* Adjust the size of the photo within the container */
            width: auto;
            height: auto;
        }

        .volunteer_photo {
            height: fit-content;
            width: fit-content;
            padding-top: 80px;
        }

        .content1 {
            flex-direction: row;
            display: flex;
        }
    </style>
</head>

<body>
    <div id="content">
        <div class="content1">
            <div class="container" style="padding-left:40px; padding-right:40px;">
                <div class="container1">
                    <h2 style="font-weight:bold; margin-top:0; margin-bottom: 2px;"><?=$row["Name"]?></h2>
                    <div class="row">
                        <div class="container11">
                            <div class="lrow">
                                <label><strong>Email : </strong></label>
                            </div>
                        </div>
                        <div class="container12">
                            <div class="rrow">
                                <label><?=$row["email"]?></label>
                            </div>
                        </div>
                    </div>
        
        

                    <div class="row">
                        <div class="container11">
                            <div class="lrow">
                                <label><strong>Contact :</strong></label>
                            </div>
                        </div>
                        <div class="container12">
                            <div class="rrow">
                                <label><?=$row["phone"]?></label>
                            </div>
                        </div>
                    </div>
        
        

                    <div class="row">
                        <div class="container11">
                            <div class="lrow">
                                <label><strong>Point :</strong></label>
                            </div>
                        </div>
                        <div class="container12">
                            <div class="rrow">
                                <label><?=$row["point"]?></label>
                            </div>
                        </div>
                    </div>
        
        

                    <div class="row">
                        <div class="container11">
                            <div class="lrow">
                                <label><strong>Distributed point:</strong></label>
                            </div>
                        </div>
                        <div class="container12">
                            <div class="rrow">
                                <label><?=$row["distributed_point"]?></label>
                            </div>
                        </div>
                    </div>
        
        

                    <div class="row">
                        <div class="container11">
                            <div class="lrow">
                                <label><strong>Post :</strong></label>
                            </div>
                        </div>
                        <div class="container12">
                            <div class="rrow">
                                <label><?=$row["post"]?></label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        

        <div class="content_tasks">
        <table width="100%" id="ssss" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th style="width: 10%;">Event Id</th>
                            <th>Event  Name</th>
                            <th>Event Description</th>
                            <th>Event Deadline </th>
                            <th>Event Date </th>        
                            <th>No of Participant</th>
                            <th>Event Credit</th>
                            <th>Images</th>
                            <th>status</th>
                            <th>Edit your event</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($table = mysqli_fetch_object($event_id)){ ?>
                          <tr>
                            <td style="width: 10%;"><a href="DB/access.php?event_id=<?= $table->id ?>">#
                                <?php echo $table->id; ?>
                              </a></td>
                            <td>
                              <?php echo $table->name; ?>
                            </td>
                            <td>
                              <?php echo $table->description; ?>
                            </td>
                            <td>
                              <?php echo $table->registration_end; ?>
                            </td>
                            <td>
                              <?php echo $table->date; ?>
                            </td>
                            <td>
                              <?php echo $table->participants; ?>
                            </td>
                            <td>
                              <?php echo $table->point; ?>
                            </td>
                            <td>
                              <img src="event_image/<?=$table->image?>" alt="">
                            </td>
                            <td>
                              <?php echo $table->status; ?>
                            </td>
                              
                            <td>
                                <a href="addevent_form.php" class="btn btn-primary" 
                                    class="btn btn-danger"  title="Change Team Status"
                                  onclick="window.open('add_event.php?event_id=<?=$table->id?>', 'newwindow', 'width=500,height=500'); return false;"><i
                                    class='fa fa-gg-circle' aria-hidden='true'></i></a>
                                <a href="#" class="btn btn-primary" title="Change Team Name"
                                  onclick="window.open('edit_event.php?event_id=<?=$table->id?>', 'newwindow', 'width=500,height=500'); return false;"><i
                                    class='fa fa-edit' aria-hidden='true'></i></a>
                              </td>
                            
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
         </div>

    </div>

    <script>
        const photoUpload = document.getElementById('photo-upload');
        const photoPreview = document.getElementById('photo-preview');

        photoUpload.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function () {
                    photoPreview.src = this.result;
                });

                reader.readAsDataURL(file);
            } else {
                photoPreview.src = '';
            }
        });
    </script>
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/367dc472-e943-46b9-ae4e-6d017469ff85/webchat/config.js"
        defer></script>
</body>

</html>
<?php include ("layouts/footer.php"); ?>