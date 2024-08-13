
<?php session_start();?>

<?php include("layouts/header.php"); ?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
	<div class="row">
	<div class="col-sm-8 bg-info">
	<h2 class="text-center text-warning">Items Details</h2>
	<table class="table table-bordered table-striped">
		<tr>
		
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Photo</th>
		<th colspan="2">Action</th>
		</tr>
<?php
$connection=mysqli_connect('localhost','root','','hotal_man');
	$qq=mysqli_query($connection,"SELECT * FROM hotaldetails2");
	while($na=mysqli_fetch_array($qq))
	{
		?>
		<tr>
		
		<td><?php echo $na['product'];?></td>
		<td><?php echo $na['price'];?></td>
		<td><?php echo $na['discount'];?></td>
		<td><img src="pic/<?php echo $na['image']?>" height="50px" width="50px"/></td>
		<td><a href="#" class="btn btn-primary">Edit</a></td>
		<td><a href="#" class="btn btn-danger">Delete</a></td>
		</tr>
		<?php
	}
	
?>
		</table>
		</div>


        <?php 
	
		$qq=mysqli_query($connection,"SELECT hotalname FROM hotaldetails1");
		?>
		
		<div class="col-sm-4 bg-warning">
			<h2 class="text-info text-center">Add Items</h2>
<form  action="additem.php" method="post"  enctype="multipart/form-data">
	 <div class="form-group">
      <!-- <label for="sel1">Select Hotel (select one):</label> -->
      <!-- <select class="form-control" name="sel1">
	  <option>--Select--</option>
		<?php
		while($na=mysqli_fetch_array($qq))
		{
			?>
		 <option><?php echo $na['hotalname'];?></option>
       <?php
		}
	   ?>
      </select> -->
	<div class="form-group">
		<label>Price: </label>
		<input type="number" name="price" class="form-control">
	</div>
	<div class="form-group">
		<label>Quantity: </label>
		<input type="text" name="Quantity" class="form-control">
	</div>
    <div class="form-group">
		<label>Discount: </label>
		<input type="text" name="discount" class="form-control">
	</div>

	<center><input type="submit" name="sub1" value="Add" class="btn btn-info"></center>
</form>
</div>
    </div>
    </div>
</body>
</html>
<br>
<br>
<?php include("layouts/footer.php"); ?>


