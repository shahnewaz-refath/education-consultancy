<?php
	require_once('database.php');   
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Overseas Higher Education Solution</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!-- favicon -->
	<link rel="shortcut icon" type="image/icon" href="images/Logo.png"/>

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav navbar-fixed-top" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 text-right">
							<p>
								<ul class="colorlib-social-icons">
									<li style="color: red;"><i class="fas fa-phone-alt"></i> Hotline:  +880-1711-296646</li>
									<li><i class="fas fa-phone-alt"></i> +880-31-658767</li>
									<li><i class="far fa-envelope-open"></i> info@ohesbd.com</li>
									<!-- <li><a href="#"><i class="icon-twitter"></i></a></li> -->
									<li><a title="facebook page" href="https://www.facebook.com/Overseas-Higher-Education-Solution-106186254083624/"><i style = "color:#fff;" class="fab fa-facebook-square"></i> Facebook Page</a></li>
									<!-- <li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="ctop-menu">
				<div class="customcontainer">
					<div class="row">
						<div class="col-md-6">
							<div id="custom-logo"><a href="index.php"><img class = "c-logo" src="images/Logo.png"><span id = "logospan">Overseas Higher Education Solution</span></a></div>
						</div>
						<div class="col-md-6 text-right menu-1">
							<ul id = "ctopul">
								<li ><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="#">Courses <i class="fas fa-caret-down"></i></a>
									<ul class="dropdown">
										<li><a href="undergradcourses.html">Undergraduate</a></li>
										<li><a href="postgradcourses.html">Post Graduate</a></li>
										<li><a href="othercourses.html">Other Courses</a></li>
									</ul>
								</li>
								<li><a href="universities.html">Universities</a></li>
								<li id = "homeindex"><a href="gallery.php">Gallery</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
			<div class ="r-banner cbanners">
				<ul class="slides">
			   	<li >
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3">
				   				<div class="text-center r-inner-banner">
				   					<h1 >Gallery</h1>
				   					<h2 ><span><a href="index.php">Home</a> | Gallery</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		
		<div class="photogallery">
			<div class="container">
				<?php
					$getalbum = "SELECT * FROM album ORDER BY datetime DESC";
					$albumres = mysqli_query($database->connection,$getalbum);
					while($albumrow = mysqli_fetch_array($albumres)){
				?>
				<div class="row" style="border-bottom: 1px solid #DCDCDC;">
					<div class="col-md-12">
						<h3 style="font-family: arial;text-transform: uppercase;"><?php echo $albumrow['albumname'];?></h3>
					</div>
					<div class="col-md-12">
						<p><?php echo $albumrow['albumcaption'];?></p>
					</div>
					<div class="col-md-12" style="padding-bottom: 10px;">
						<?php
							$getpic = "SELECT * FROM images WHERE album_id = '".$albumrow['id_pk']."' ORDER BY id_pk DESC";
							$picres = mysqli_query($database->connection,$getpic);
							while($picrow = mysqli_fetch_array($picres)){
						?>
						<div class="col-md-3" style="padding: 2px 2px;">
							<a href="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname'];?>/<?php echo $picrow['picture'];?>" data-fancybox="gallery<?php echo $albumrow['id_pk'];?>" data-caption="<?php echo $albumrow['albumname'];?> -> <?php echo $picrow["picture"]; ?>"><img style = "height: 20em;width: 17.5em;" src="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname'];?>/<?php echo $picrow['picture'];?>"></a>
						</div>
						<?php
							}
						?>						
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>	

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 colorlib-widget text-center">
						<h4>About OHES</h4>
						<p>One stop education solution for home & abroad. One of the best education consultancy firm of bangladesh. Here we assure you quality service. We are professional and reliable. </p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a title="facebook page" href="https://www.facebook.com/Overseas-Higher-Education-Solution-106186254083624/"><i style = "color:#3B5998;" class="fab fa-facebook-square"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-4 colorlib-widget text-center">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="far fa-check-circle"></i> About Us</a></li>
								<li><a href="#"><i class="far fa-check-circle"></i> Courses</a></li>
								<li><a href="#"><i class="far fa-check-circle"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-4 colorlib-widget text-center">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li><i class="far fa-address-card"></i>&nbsp 
								IFCO COMPLEX (5TH FLR),1147 EAST NASIRABAD,CDA AVENUE (GEC CIRCLE),CHATTOGRAM,BANGLADESH
						    </li>
							<li><a href="tel://+880-31-658767"><i class="fas fa-phone-alt"></i> +880-31-658767</a></li>
							<li><a href="mailto:info@ohesbd.com"><i class="far fa-envelope-open"></i> info@ohesbd.com</a></li>
							<li><a href="http://ohesbd.com"><i class="fas fa-globe"></i> ohesbd.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to OHES| Developed By <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Refath</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</small>
								<br> 
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- Fancybox JS library -->
	<script src="fancybox/jquery.fancybox.js"></script>

	<script type="text/javascript">
		$('#homeindex').addClass('active');
		$("[data-fancybox]").fancybox();
    </script>

	</body>
</html>

