<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Service</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="styles1.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap4.5/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap4.5/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
		  /* Make the image fully responsive */
		.carousel-inner img {
		  width: 100%;
		  height: 50%;
		}
		.carousel-caption{
			background: rgba(245, 56, 56, .9);
			top: 50%;
			bottom: initial;
			transform: translateY(-50%);
			
		}
		@media screen and (max-width: 990px) {
		    .carousel-caption h1,h2,h3{
				color: white;
				font-size: 150%;
			}
			.carousel-caption{
			background: rgba(245, 56, 56, .9);
			top: 50%;
			bottom: initial;
			transform: translateY(-50%);
			font-size: 80%;
		}
		}
		  @media screen and (max-width: 768px) {
		    body {
		      font-size: 90%; } }
		.carousel-caption h1,h2,h3{
			color: white;
		}

		</style>
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.php">
						<img src="images/total-logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title"><span></span></h1>
					</a>
					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="location.php">Our Location</a></li>
							<li class="menu-item current-menu-item"><a href="services.php">Services</a></li>
							<li class="menu-item"><a href="product.php">Product</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<div id="demo" class="carousel slide" data-ride="carousel">

						  <!-- Indicators -->
						  <ul class="carousel-indicators">
						    <li data-target="#demo" data-slide-to="0" class="active"></li>
						    <li data-target="#demo" data-slide-to="1"></li>
						    <li data-target="#demo" data-slide-to="2"></li>
						  </ul>
						  
						  <!-- The slideshow -->
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="dummy/total/p3.jpg" alt="Los Angeles" width="1100" height="500">

						      <div class="carousel-caption">
						      	<h3>CHANGE OIL PROMO PACK</h3>
						      	<br>
						      	<div class="row">
						      		<div class="col">
							    		<h1>GASOLINE</h1>
							    		<h8>as low as</h8>
							    		<h1>PHP 999</h1>
						      		</div>
						      		<div class="col">
						      			<h1>DIESEL</h1>
							    		<h8>as low as</h8>
							    		<h1>PHP 1,499</h1>
						      		</div>
						      	</div>
							  	
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img src="dummy/total/p2.jpg" alt="Chicago" width="1100" height="500">
						      <div class="carousel-caption">
							  	<h3>ELECTRICAL & AIRCON SERVICES</h3>
						      	<br>
						      	<div class="row">
						      		<div class="col">
							    		<h2>POWER WINDOW AND CENTER LOCK REPAIR</h2>
							    		<h8>as low as</h8>
							    		<h1>PHP 799</h1>
						      		</div>
						      		<div class="col">
						      			<h2>AIRCON CLEANING WITH FREON CHARGING STARTS</h2>
							    		<h8>as low as</h8>
							    		<h1>PHP 1,999</h1>
						      		</div>
						      	</div>
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img src="dummy/total/p1.jpg" alt="New York" width="1100" height="500">
						      <div class="carousel-caption">
							  		<h2>STEAM CAR WASH</h2>
							    	<h2>with BAC-TO-ZERO SANITIZING</h2>
							    	<h8>start at</h8>
							    	<h1>PHP 1,999</h1>
							  </div>
						    </div>
						  </div>
						  
						  <!-- Left and right controls -->
						  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						    <span class="carousel-control-prev-icon"></span>
						  </a>
						  <a class="carousel-control-next" href="#demo" data-slide="next">
						    <span class="carousel-control-next-icon"></span>
						  </a>
						</div>
					</div>
					<div class="container">
						<h4 class="entry-title">Nowhere is TOTAL’s brand of service more prominent than at our front line – our Service Stations. Motorists receive the same high standard of service – fast, efficient and with a smile – experienced by TOTAL customers the world over.</h4>

						 <p>TOTAL's range of products for cars offers a comprehensive choice of lubricants for every vehicle. Our range even includes specially formulated oils for use in diesel engines and older vehicles that can't tolerate modern synthetic oils.</p>

						<div class="feature-grid">
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-cpu.png" alt=""></figure>
								<h2 class="feature-title">ECU CLEANING</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta earum aliquam</p> -->
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon/engine1.png" height="117" width="117" alt=""></figure>
								<h2 class="feature-title">Engine Cleaner</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta earum aliquam</p> -->
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-engine.png" alt=""></figure>
								<h2 class="feature-title">ATF DIALYSIS</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta earum aliquam</p> -->
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-brake.png" alt=""></figure>
								<h2 class="feature-title">ROTOR DISC & BRAKE DRUM</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta earum aliquam</p> -->
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon/air1.png" height="117" width="117" alt=""></figure>
								<h2 class="feature-title">AIRCON</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta earum aliquam</p> -->
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-exhaust.png" alt=""></figure>
								<h2 class="feature-title">HYDROCARBON</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta earum aliquam</p> -->
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="subscribe-form">
						<form action="#">
							<input type="text" placeholder="Enter your email to subscribe...">
							<button type="submit"><img src="images/icon-envelope-white.png" alt=""></button>
						</form>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="copy">
						<p>Copyright 2020 Total Quartz Autocare. Designed by Jan Ronnie Calayag. All rights reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>