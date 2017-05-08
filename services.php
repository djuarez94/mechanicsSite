<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mechanic Site</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
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
 					   <li><a href="contact.php">Contact</a></li>
 					   <li class="active"><a href="services.php">Services</a></li>
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
				<p>What Can I Do For You?</p>
				<button type="button" name="button"><a class="servicesButton" href="#services">Find Out!</a></button>
			</div>
		</div>
		<div class="services" id="services">
			<div class="parent">
				<h2>Car Inspection</h2>
				<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
			</div>
			<div class="parent shade">
				<h2>Oil Changes</h2>
				<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
			</div>
			<div class="parent">
				<h2>Battery</h2>
				<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
			</div>
			<div class="parent shade">
				<h2>Radiator</h2>
				<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
			</div>
			<div class="parent">
				<h2>Specials!</h2>
				<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
			</div>
		</div>
		<footer>
			<img src="">
			<div class="socialLinks">

			</div>
			<p class="copyright">&copy; <?php echo date('Y'); ?> Company Name. All rights reserved.</p>
		</footer>
	</body>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>