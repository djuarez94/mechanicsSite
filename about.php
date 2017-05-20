<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mechanic Site</title>
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
		<div class="parallaxAbout">
			<div class="parallaxContent">
				<p>Fixing Car Problems for 10 Years!</p>
				<button type="button" name="button"><a class="about" href="#infoFirst">Learn More!</a></button>
			</div>
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
		<div class="info" id="experience">
			<h3>Experience</h3>
			<p>We have been repairing automobiles for 10 successful years! We began as self taught auto repair mechanics at a young age and began loving it more and more. We are knowledgeable of Chevrolets, Hondas, and Toyotas.</p>
			<div class="carLogos">
				<img src="img/Chevy_Logo.png" width="100px" style="padding-right: 10px; padding-left: 10px;">
				<img src="img/Honda_Logo.png" width="100px" style="padding-right: 10px; padding-left: 10px;">
				<img src="img/Toyota_Logo.png" width="100px" style="padding-right: 10px; padding-left: 10px;">
			</div>
		</div>
		<footer>
			<img class="footerLogo" src="img/mainLogo_Lrg.png">
			<div class="email">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<a href="mailto:randomEmail@email.com"><p>randomEmail@email.com</p></a>
			</div>
			<div class="number">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-675-485-9384"><p>675-485-9384</p></a>
			</div>
			<div class="socialLinks">
				<a href="https://facebook.com"><i id="socialLinks" class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://instagram.com"><i id="socialLinks" class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://twitter.com"><i id="socialLinks" class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<p class="copyright">&copy; <?php echo date('Y'); ?> Pepe's Auto Shop Solutions. All rights reserved.</p>`
			</div>
		</footer>
	</body>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>