<?php session_start();
$currentURL = $_SERVER['REQUEST_URI'];
if (!isset($_SESSION['email'])) {
    if ($currentURL !== '/reward_management/login.php' && $currentURL !== '/reward_management/signup.php') {
       header("Location: /reward_management/login.php");
        exit;
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reward Management Project</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--slider-->
<link href="slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">

    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

	<style>
		.btm_border{
			background-image:url("./images/nasa.jpg");
			background-repeat:no-repeat;
			/* position: fixed; */
		}
		.h_bg{
			background-image:url("./images/light4.jpg");
			background-repeat:no-repeat;
			/* position: fixed; */
		}
	
	.header{
		background-color:midnightblue;
			background-repeat:no-repeat;
			/* position: fixed; */
	}
	  
		.search-bar-container {
            text-align: center;
            margin: 20px 0;
        }

        .search-bar {
            padding: 10px;
            width: 300px;
            border: 2px solid midnightblue;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: midnightblue;
			border: 2px solid midnightblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .search-bar {
                width: 100%; /* Make the search bar full width on smaller screens */
            }
        }
	</style>
</head>
<body>
<div  class="btm_border">
<div  class="h_bg">
<div  class="wrap">
	<div   class="header">
<!-- <div  style="background-color:deepskyblue"  class="btm_border">
<div style="background-color:midnightblue" class="h_bg">
<div style="background-color:midnightblue" class="wrap">
	<div   style="background-color:deepskyblue" class="header"> -->
		<div class="logo" style="color:#D3D4D9;">
			<b>Reward Management Project</b>
		</div>
		<div class="social-icons">
			<ul>
			     <li><a class="facebook" href="#" target="_blank"> </a></li>
			     <li><a class="twitter" href="#" target="_blank"></a></li>
			     <li><a class="googleplus" href="#" target="_blank"></a></li>
			     <li><a class="pinterest" href="#" target="_blank"></a></li>
			     <li><a class="dribbble" href="#" target="_blank"></a></li>
			     <li><a class="vimeo" href="#" target="_blank"></a></li>
		   </ul>
		</div>	
		<div class="clear"></div>
	</div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
			    <li><a href='index.php'><font color='white'><span>Home</span></font></a></li>
			    <li><a href='about.php'><font color='white'><span>About</span></font></a></li>
			    <li><a href='contact.php'><font color='white'><span>Contact</span></font></a></li>
                <li><a href='service.php'><font color='white'><span>Services</span></font></a></li>
				<?php if(isset($_SESSION["email"])){ ?>
					<?php if($_SESSION["usertype"] == "student"){ ?>
						<li class='has-sub'><a href='profilest.php'><font color='white'><span>Profile</span></font></a></li>
					<?php }elseif($_SESSION["usertype"] == "teacher"){ ?>
						<li class='has-sub'><a href='profilet.php'><font color='white'><span>Profile</span></font></a></li>
					<?php }elseif($_SESSION["usertype"] == "sponcer"){ ?>
						<li class='has-sub'><a href='profilesp.php'><font color='white'><span>Profile</span></font></a></li>
					<?php }elseif($_SESSION["usertype"] == "academic"){ ?>
						<li class='has-sub'><a href='profilea.php'><font color='white'><span>Profile</span></font></a></li>
					<?php } ?>
					<li class='has-sub'><a href='logout.php'><font color='white'><span>logout</span></font></a></li>
				<?php } else { ?>
			    <li class='has-sub'><a href='signup.php'><font color='white'><span>Signup</span></font></a></li>
			    <li class='last'><a href='login.php'><font color='white'><span>Login</span></font></a></li>
				<?php } ?>
			 	<div class="clear"></div>
			 </ul>
	</div>
<br>	
	<!-- <div class="search"> -->
	<!-- <section class="search-bar-container">
        <p>Kuch Dhoond Rahe Ho? Yahan Likh Kar Khojo!</p> -->
        <!-- <form action="/search" method="GET">
            <input type="text" class="search-bar" placeholder="Search for projects or topics" name="q" required>
            <button type="submit" class="search-button">Search</button>
        </form>
    </section> -->
    	<!-- <form>
    		<input type="text" value="">
    		<input type="submit" value="">
    	</form> -->
	<!-- </div> -->
	<div class="clear"></div>
</div>
</div>
</div>
</div>