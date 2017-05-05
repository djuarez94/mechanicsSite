<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mechanic Site</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
				 <a class="navbar-brand" href="#">WebSiteName</a>
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
		<div class="parallax">
			<div class="parallaxContent">
				<p>Fixing Car Problems for 10 Years!</p>
				<button type="button" name="button"><a href="#infoFirst">Learn More!</a></button>
			</div>
		</div>
		<div class="info" id ="infoFirst">
			<h3>Mission Statement</h3>
			<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
		</div>
		<div class="info">
			<h3>Values & Beliefs</h3>
			<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
		</div>
		<div class="info experience">
			<h3>Experience</h3>
			<p>This is just a placeholder text. It is used just for layout purposes and has nothing to do with the actual content that you will see on the final.</p>
			<div class="carLogos">
				<img src="">
				<img src="">
				<img src="">
			</div>
		</div>
		<footer>
			<img src="">
			<p>&copy; <?php echo date('Y'); ?> Company Name. All rights reserved.</p>
		</footer>
	</body>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>