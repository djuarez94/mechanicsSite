<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mechanic Site</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
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
				<a class="navbar-brand" href="index.php">Mechanic Site</a>
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
		<div class="parallax">
			<div class="email">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<p>emailAddress@email.com</p>
			</div>
			<div class="number">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<p>675-485-9384</p>
			</div>
			<div class="parallaxContent">
				<p>Contact Me Today!</p>
				<button type="button" name="button"><a class="contact" href="#contact">Learn More!</a></button>
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
					<textarea rows="4" cols="50" id="GDmessage" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="button" type="submit" value="Submit" name="submit">
			</form>
		</div>
		<footer>
			<img src="">
			<div class="socialLinks">
				<a href="https://facebook.com"><i id="socialLinks" class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://instagram.com"><i id="socialLinks" class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://twitter.com"><i id="socialLinks" class="fa fa-twitter-square" aria-hidden="true"></i></a>
			</div>
			<p class="copyright">&copy; <?php echo date('Y'); ?> Company Name. All rights reserved.</p>
		</footer>
	</body>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>