<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PASS : Home</title>
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
					   <li class="active"><a href="index.php">Home</a></li>
					   <li><a href="about.php">About Us</a></li>
					   <li><a href="contact.php">Contact</a></li>
					   <li><a href="services.php">Services</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="parallaxAbout">
			<div class="parallaxContent">
				<p>Fixing Car Problems for 10 Years!</p>
				<a href="about.php"><button type="button" name="button"><i class="fa fa-arrow-down" aria-hidden="true"></i></button></a>
			</div>
		</div>
		<div class="services" id="services">
			<div class="splitParent">
				<div class="parentHome flexParent">
					<h3>Experienced Mechanics</h3>
					<p>At Pepe's Auto Shop Solutions each of our independently operated centers hires ASE-certified techs. You can count on us to explain any issues that crop up thoroughly and provide free written estimates on repairs.</p>
					<a href="services.php">Our Services >></a>
				</div>
				<div class="parentHome flexParent shade">
					<h3>Competitive Rates</h3>
					<p>At Pepe's Auto Shop Solutions, we proudly provide quality service at rates that won't leave your wallets empty. Plus, we offer complimentary shuttle service within 5 miles on any major repairs taking 2 hours or more. Just hear from some of our satisfied customers.</p>
					<a href="services.php">Our Prices >></a>
				</div>
			</div>
			<div class="splitParent">
				<div class="parentHome flexParent">
					<h3>No Appointments Needed</h3>
					<p>No appointment and don't have time to call and schedule one? At Pepe's Auto Shop Solutions, that’s no problem. From last-minute smog checks to emergency repairs, we vow to fix your issue quickly and expertly the first time.</p>
				</div>
				<div class="parentHome flexParent shade">
					<h3>Location</h3>
					<p>400 Amar Ave La Puente, CA 91704</p>
					<p>
						<b>Open Hours:</b> Monday - Saturday: 9am - 7pm
						<br>
						Sunday : Closed
					</p>
					<a href="services.php">Contact Us >></a>
				</div>
			</div>
		</div>

			<?php include 'footer.php' ?>