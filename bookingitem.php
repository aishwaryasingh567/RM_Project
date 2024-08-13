<?php include "layouts/header.php";?>
<html>
	<head>
		<title>My Home</title>	
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<style>
		.span{
			font-size:35px;
			margin-left:380px;
			color:white;
			font-family: Verdana, Arial, sans-serif;
		}
		.span1{
			font-size:15px;
			margin-left:500px;
			margin-top:-450px;
			color:white;
			font-family: Verdana, Arial, sans-serif;
		}
		
 
	
		
		</style>
		
	</head>
	<body style="background-color:skyblue;">

		<!-- <div style="height:100px; width:100%;">
		<img src="../logo1.png" height="75px" width="80px" class="img-circle" style="margin-top:10px;">
		<span class="span">A&W Restaurants</span><br>
		</div>
		<nav class="navbar navbar-inverse" style="background-color:#51361c; border:0px; color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:white">A&W</a>
    </div> -->
    <!-- <ul class="nav navbar-nav">
      <li><a href="index.php"  style="color:white">Home</a></li>
      <li><a href="#"  style="color:white">Abouts Us</a>
	 <li><a href="#"  style="color:white">Contact Us</a></li>
    </ul> -->
    <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"  style="color:white"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['favcolor'];?></a></li>
      <li><a href="login.php"  style="color:white"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
    </ul> -->
  <!-- </div>
</nav>
  <hr> -->
		
		<h2 class="text-center" style="color:black;"> Items Details</h2>
		<div class="row">

		
			
			<div class="col-md-6">
			<img src="../Admin/pic/<?php echo $a['image']?>" class="img-thumbnail" height="500px" width="500px"/>
			</div>
            <br>
			<div class="col-md-6">
			<form method="post">
				<span  style="color:black">Item Name:</span>
				<input type="text" name="pro" value="<?php echo $a['product']?>" class="form-control" readonly/>
				<span  style="color:black">Price:</span>
				<input type="text" name="pri" id="ss" value="<?php echo $a['price']?>"  class="form-control" readonly/>
				<span  style="color:black">Discount:</span>
				<input type="text" name="dis" value="<?php echo $a['discount']?>"  class="form-control" readonly/>
				<span  style="color:black">Select Quantity:</span>
					<select id="mySelect" onchange="myFunction()"  class="form-control" name="dp">
						<option>--Select Quantity--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
					<span style="color:black">Total Amount:</span>
					<input type="text" id="am" value="" name="amt" class="form-control"/>
				
				<span style="color:black">Delivery Address:</span>
				<input type="text" name="add"  class="form-control">
				<br/>
				<br/>
				<center>
				<input type="submit" class="btn btn-success" name="sbb" value="Book Now" />
				</center>
				
			</div>
			
    </div>
	</body>
</html>

<?php include("layouts/footer.php"); ?>