<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PASS : About Us</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" href=" https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css ">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" href="index.php"><img src="img/mainLogo_Sm.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
					   <li><a href="index.php">Home</a></li>
 					   <li class="active"><a href="about.php">About Us</a></li>
 					   <li><a href="contact.php">Contact</a></li>
 					   <li><a href="services.php">Services</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<div class="parallaxContentHome">
				<p>Pepe's Auto Shop Solutions</p>
				<a class="about" href="#infoFirst"><button type="button" name="button">Learn More!</button></a>
			</div>
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#mycarousel" data-slide-to="1"></li>
		    <li data-target="#mycarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item">
		        <img src="img/aboutPage_BGimg.jpg"  alt="First Image">
		        <!-- <div class="carousel-caption"> -->
		            <!-- <h3>First Image</h3> -->
		        <!-- </div> -->
		    </div>
		    <div class="item">
		        <img src="img/slideBGimg_2.jpg"  alt="Second Image">
		        <!-- <div class="carousel-caption"> -->
		            <!-- <h3>Second Image</h3> -->
		        <!-- </div> -->
		    </div>
		    <div class="item">
		        <img src="img/slideBGimg_1.jpg"  alt="Third Image">
		        <!-- <div class="carousel-caption"> -->
		            <!-- <h3>Third Image</h3> -->
		        <!-- </div> -->
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
</div>
		<div class="infoBox">
			<div class="info" id ="infoFirst">
				<h3>Mission Statement</h3>
				<p>At Pepe's Auto Shop Solutions we provide high quality auto repairs and superior customer service. Gaining trust and exceeding customers expectations is at the heart of our organization, as we give all customers an exceptional experience while having their vehicles serviced. We continue to strive to be a leading example in the auto repair industry and at the same time support our local community.</p>
			</div>
			<div class="info">
				<h3>Values & Beliefs</h3>
				<p>Pepe's Auto Shop Solutions believes that trust and loyalty are two main factors to have in the auto repair industry. Our customer's come first because we want our customers to feel comfortable and safe driving their automobiles when leaving our parking lot.</p>
			</div>
		</div>
		<div class="infoBox">
			<div class="info" id ="experience">
				<h3>Experience</h3>
				<p>We have been repairing automobiles for 10 successful years! We began as self taught auto repair mechanics at a young age and began loving it more and more. We are knowledgeable of Chevrolets, Hondas, and Toyotas.</p>
			</div>
			<div class="info" id = "experience">
				<div class="carLogos">
					<img src="img/Chevy_Logo.png" width="100px" style="padding-right: 10px; padding-left: 10px;">
					<img src="img/Honda_Logo.png" width="100px" style="padding-right: 10px; padding-left: 10px;">
					<img src="img/Toyota_Logo.png" width="100px" style="padding-right: 10px; padding-left: 10px;">
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>