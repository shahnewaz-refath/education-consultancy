<?php
	require_once('database.php');
	$getdata = "SELECT * FROM employee";
    $res = mysqli_query($database->connection,$getdata);
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
								<li><a href="gallery.php">Gallery</a></li>
								<li id = "homeindex"><a href="about.php">About us</a></li>
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
				   					<h1 >About Us</h1>
				   					<h2 ><span><a href="index.html">Home</a> | About Us</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		
		<div id="colorlib-about" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h1 class="hfont">Introduction</h1>
					</div>
					<div class="col-lg-11 col-md-11 col-sm-12 col-md-offset-1">
						<p>Overseas higher education solution is an education agent. We provide helps and advice to students who wants to pursue higher education abroad. We believe that education is a fundamental right and everyone should have access to quality higher education. With this view in mind, we strive to create oppurtunities for those who have genuine aspiration and honest intention, who seek excellent quality in tution, student services, qualifications and career prospects post qualification. We work in the best interest of both students and our partner universities and colleges - we are professional and reliable. We follow the British Counsil's "Guide to Good Practice for Education Agents". Our activities also incorporate guidelines of English UK. In addition to the professional code of conducts, we observe ethical, moral and personal values to maintain high standards in work. </p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h1 class="hfont">Our Vision</h1>
					</div>
					<div class="col-lg-11 col-md-11 col-sm-12 col-md-offset-1">
						<p>Help the nation with assisting the students in higher education. </p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h1 class="hfont">Our Mission</h1>
					</div>
					<div class="col-lg-11 col-md-11 col-sm-12 col-md-offset-1">
						<p>Make the dream of Bangladeshi students true with connecting them the entire global educational institutes. </p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h1 class="hfont">What Our Chairman say</h1>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-md-offset-1 cimage" >
						<figure class="figure text-center">
							<img class="figure-img img-fluid rounded" src="images/chairman.jpg" style="width:200px;height: 220px;border-radius: 5px;padding-bottom: 2px;">
							<figcaption class="figure-caption hfont" style="background-image: linear-gradient(to right top, #6ad8ae, #00bfbb, #00a4c4, #0085c3, #0064b0, #0065af, #0067ae, #0068ad, #288cbf, #5dafcc, #94d1db, #cdf1ef);border-radius: 10px;padding: 1px 0px;">Mujibur Rahman
								<br>
								<small>Chairman</small>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>
							I have the very great honor and privilege of addressing you and describing to you in this message the importance of proper education and how this fact has shaped the core values and ultimately the culture of Overseas Higher Education Solution from now on. Of the many topics I could choose as the focus of this message I have chosen one that I believe in as an educator most strongly. To my mind, the singular, the unique; both the corner and capstones that has, does and will for all time shape the personality and character of a society is education. It is too important an issue to address solely in times of need and want. Our, and I mean each person in society, attention to quality education development and delivery should be constant with one sure foot rooted in the past, one in the present and with a discerning eye focused on the future. Our global society needs individuals who are free thinkers, who will persevere in the face of odds, who are willing to continuously learn and change, who have an inherent sense of curiosity, who see diversity and plurality as strengths and who will stand firmly by a set of values that guide them through life. As part of society, Overseas Higher Education Solution is committed to ensuring the advancement of the education system. We. want to help ensure that children develop into critical thinkers, creative doers, problem solvers and sensitive humanbeings and, in the process, we hope they will discover and realize their infinite potential. To that end Overseas Higher Education Solution actively -engages with government agencieg, other regulators, administrators, teachers, parents, and others to ensure that the educational system both at the macro and micro levels develop and/or maintain a culture of proper advancement. The educational system should keep pace with advancements in society regardless of where they may occur. Let us make our own future.
						</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h1 class="hfont">Our team</h1>
					</div>
					<?php
                        while($row = mysqli_fetch_array($res)){
                    ?>

		                <!-- single-instructor -->
		                <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="ohesadmin/images/employee/<?php echo $row['picture']; ?>" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4><?php echo $row["name"]; ?></h4>
		                            <p class="profession"><?php echo $row["designation"]; ?></p>
		                            <p class="breakline"><?php echo $row["contactnumber"]; ?></p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline"><?php echo $row["email"]; ?></p>
		                        </div>
		                    </div>
		                </div>
		                <?php
		                	}
		                ?>

		                <!-- single-instructor -->
		                <!-- <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="images/teampic.jpeg" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4>Md. Bellal Hossain</h4>
		                            <p class="profession">Head of Operation</p>
		                            <p class="breakline">01711 296646</p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline">bhossain.ohes@gmail.com</p>
		                        </div>
		                    </div>
		                </div> -->
		                <!-- single-instructor -->
		                <!-- <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="images/teampic.jpeg" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4>S.K. Shil</h4>
		                            <p class="profession">Manager Accountant</p>
		                            <p class="breakline">01758 969135</p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline">mujib@sanowara.com</p>
		                        </div>
		                    </div>
		                </div> -->
		                <!-- single-instructor -->
		                <!-- <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="images/teampic.jpeg" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4>Shafiqul Hasan Azad</h4>
		                            <p class="profession">Marketing executive</p>
		                            <p class="breakline">01711 296647</p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline">sales.ohes@gmail.com</p>
		                        </div>
		                    </div>
		                </div> -->
		                <!-- single-instructor -->
		                <!-- <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="images/teampic.jpeg" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4>Saira Siddiqa</h4>
		                            <p class="profession">Student Counselor</p>
		                            <p class="breakline">01711 296648</p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline">sairacounselor.ohes@gmail.com</p>
		                        </div>
		                    </div>
		                </div> -->
		                <!-- single-instructor -->
		                <!-- <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="images/teampic.jpeg" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4>Nusrat Sameha</h4>
		                            <p class="profession">Student Counselor</p>
		                            <p class="breakline">01711 296649</p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline">nusratcounselor.ohes@gmail.com</p>
		                        </div>
		                    </div>
		                </div> -->
		                <!-- single-instructor -->
		                <!-- <div class="col-lg-3 col-sm-6 animate-box">
		                    <div class="single_instructor">
		                        <div class="author">
		                            <img src="images/teampic.jpeg" alt="image" style="height:150px;width: 150px;">
		                        </div>
		                        <div class="author_decs">
		                            <h4>Md. Mokhleshur Rahman</h4>
		                            <p class="profession">In Charge(Estate & Legal Affairs)</p>
		                            <p class="breakline">01752 004999</p>
		                            <p class="breakline">info@ohesbd.com</p>
		                            <p class="breakline">info.fhes@gmail.com</p>
		                            <p class="breakline">info@sanowara.com</p>
		                        </div>
		                    </div>
		                </div> -->

					

				</div>
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

	<script type="text/javascript">
		$('#homeindex').addClass('active');
    </script>

	</body>
</html>

