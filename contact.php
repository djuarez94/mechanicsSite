<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PASS : Contact</title>
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
 					   <li><a href="about.php">About Us</a></li>
 					   <li class="active"><a href="contact.php">Contact</a></li>
 					   <li><a href="services.php">Services</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="parallaxContact">
			<div class="emailTop">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<a href="mailto:randomEmail@email.com"><p>randomEmail@email.com</p></a>
			</div>
			<div class="numberTop">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-675-485-9384"><p>675-485-9384</p></a>
			</div>
			<div class="parallaxContent">
				<p>Contact Us Today!</p>
				<a class="contact" href="#contact"><button type="button" name="button">Contact Us</button></a>
			</div>
		</div>
		<div class="contact" id="contact">
			<form method="post" action="?" id="contact" class="form-horizontal  text-left">
				<div class="form-group text-left">
					<label for="name">Name:</label>
					<input name="name" type="name" class="form-control" id="name" placeholder= "Who will I be communicating with?">
				</div>
				<div class="form-group text-left">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" id="email" placeholder= "What is your email?">
				</div>
				<div class="form-group text-left">
					<label for="subject">Subject:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "What is your email about?">
				</div>
				<div class="form-group text-left">
					<label for="message">Message:</label>
					<textarea rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="submitButton" type="submit" value="Submit" name="submit">
			</form>
		</div>
		<?php include 'footer.php' ?>