<?php include "layouts/header.php"; 
include "indexb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
        /* Reset some default styles for the body */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Style the slideshow container */
        #slideshow-container {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        /* Style the slideshow images */
        .mySlides {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensure images cover the entire container */
        }
    </style>
</head>

<body>
    <div id="slideshow-container" class="carousel slide" data-ride="carousel" style="height: 500px; width: 100%;">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="mySlides" src="food_image/img-0000001.jpg" alt="Slide 1">
            </div>
            <div class="item">
                <img class="mySlides" src="food_image/img-0000003.jpg" alt="Slide 2">
            </div>
            <div class="item">
                <img class="mySlides" src="food_image/Untitled-des" alt="Slide 3">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slideshow-container" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slideshow-container" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        // Enable automatic sliding every 5 seconds (5000 milliseconds)
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 6000
            });
        });
    </script>

    <h2 class="text-center" style="color:black;">Rewards Details</h2>

    <div class="row">
        <?php
        while ($a = mysqli_fetch_array($result)) {
            ?>

            <div class="col-md-3">
                <img style="height: 300px; width: 300px;" src="food_image/<?php echo $a['image'] ?>" class="img-thumbnail img-responsive" />
                <p class="text-center" style="color:black">
                    Rs. <?=$a['price'] ?>
                </p>
                <h4 class="text-center" style="color:black">
                    <?php echo $a['name'] ?>
                </h4>

                <p class="text-center" style="color:black">
                    <?php echo $a['description'] ?>
                </p>
                <center><a href="#" class="btn btn-primary" 
                                    class="btn btn-danger"  title="Change Team Status"
                                  onclick="window.open('bookfood.php?food_id=<?=$a['id']?>', 'newwindow', 'width=500,height=500'); return false;"><i
                                    class='fa fa-gg-circle' aria-hidden='true'></i></a>
                                </center>

            </div>

            <?php
        }

        ?>
    </div>
<br><br>
</body>

</html>
<?php include "layouts/footer.php";?>