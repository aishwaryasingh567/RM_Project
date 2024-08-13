<?php include "header1.php"; ?>
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
            object-fit: cover; /* Ensure images cover the entire container */
        }

    </style>
</head>
<body>
    <div id="slideshow-container" class="carousel slide" data-ride="carousel" style="height: 500px; width: 100%;">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="mySlides" src="a.jpg" alt="Slide 1">
            </div>
            <div class="item">
                <img class="mySlides" src="b.jpg" alt="Slide 2">
            </div>
            <div class="item">
                <img class="mySlides" src="c.jpg" alt="Slide 3">
            </div>
            <div class="item">
                <img class="mySlides" src="d.jpg" alt="Slide 4">
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
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 6000
            });
        });
    </script>

<h2 class="text-center" style="color:black;">Rewards  Details</h2>

<div class="row">
			<?php
			$connection=mysqli_connect('localhost','root','','hotal_man');
			$q=	mysqli_query($connection,"select * from hotaldetails1");
			while($a=mysqli_fetch_array($q))
				
			{
			?>
			
			<div class="col-md-3">
				<img src="Admin/pic/<?php echo $a['image']?>" class="img-thumbnail img-responsive"/>
				<p class="text-center"style="color:black"><?php echo $a['rating']?></p>
				<h4  class="text-center"style="color:black"><?php echo $a['hotalname']?></h4>
				
				<p  class="text-center"style="color:black">	<?php echo $a['description']?></p>
				<!-- <center><a href="login.php" class="btn btn-success">Add</a></center> -->
                <center><a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add</a></center>				
			</div>
            
			
			<?php
			}
			
			?>
		</table>
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Hotel</h4>
                </div>
                <div class="modal-body">
                    <!-- Add your form or content for adding a hotel here -->
                    <p>Hotel details form can go here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add Hotel</button>
                </div>
            </div>
        </div>
    </div>
	</div>
			
</body>
</html>