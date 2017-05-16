<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mechanic Site</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
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
			<div class="parallaxContent">
				<p>What Can I Do For You?</p>
				<button type="button" name="button"><a class="servicesButton" href="#services">Find Out!</a></button>
			</div>
		</div>
		<div class="services" id="services">
			<div class="parent">
				<h2>Car Inspection</h2>
				<p>Get your automobile inspected for free at our auto shop. We will check your autmobile's oil change, air filters, tire pressure, brakes, engine, and even your windshield whipers all for free.</p>
			</div>
			<div class="parent shade">
				<h2>Oil Changes</h2>
				<p>We strive to make oil changes at our shops to be no longer than 30 minutes. We understand that our csutomers have busy schedules which is why we provide them with a quic and easy oil change service.</p>
				<br>
				<b>$30.00</b>
			</div>
			<div class="parent">
				<h2>Battery</h2>
				<p>Our batteries come with a 3 year warranty for your automobile. We do not only inspect to make sure that your battery is running as it should, but we also make sure that you get the best long lasting battery for your automobile when needed.</p>
				<br>
				<b>$35.00 + Battery Price</b>
			</div>
			<div class="parent shade">
				<h2>Radiator</h2>
				<p>Automobile running hot? No worries. At Pepe's Automobile Repair Solution's, receive a coolant flush for an affordable price. This includes four gallons of coolant, a conditioner and a cleaner.</p>
				<br>
				<b>$150</b>
			</div>
			<div class="parent">
				<h2>Specials!</h2>
				<p>Don't have time to make it to our auto shops, or your automobile's problem prevents you from making it to our shops? No worries. We have a special going on this month where our mechanics enjoy the privelege of coming to you and finding a solution to your automobile's problems! Our prices for this special depends on the problem plus the area where the service will be done. So please give us a call to find out more!</p>
			</div>
		</div>
		<footer>
			<div class="email">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<a href="mailto:davidjuarez1411@gmail.com"><p>emailAddress@email.com</p></a>
			</div>
			<div class="number">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-675-485-9384"><p>675-485-9384</p></a>
			</div>
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