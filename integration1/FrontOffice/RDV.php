<?php
session_start();
include '../core/RdvC.php';
$rdvc= new RdvC();
$list=$rdvc->afficherRDV($_SESSION['cin']);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

	<!-- Animate.css_b -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">


	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js_b/respond.min.js_b"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Geoconcept.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="product.html">Shop</a>
							<ul class="dropdown">
								<li><a href="single.html">Single Shop</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="contact.php">Contact</a>
							<ul class="dropdown">
									<li><a href="RDV.php">Rendez-vous</a></li>
									<li><a href="demande.php">Demande</a></li>
								</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
						<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/rdv.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1> Rendez-vous</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>Nos Informations</h3>
						<ul>
							<li class="address">01 Rue de la chimie Z.I <br>Ben Arous</li>
							<li class="phone"><a href="tel://1234567920">+ 216 71 426 817</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">labiditammem@gmail.com</a></li>
							<li class="url"><a href="http://www.artisansdart.tn/1223__geoconcept">artisansdart.tn/1223__geoconcept</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Prenez un Rendez-vous</h3>
					<form method="post" action="ajouterRDV.php">
					<input type="hidden" id="user" name="user" value="<?php echo$_SESSION['cin'];?>">
						<div class="row form-group">
							<div class="col-md-12">
								<!-- date -->
                                <label for="date">Date du Rendez-vous</label> <br>
								<input type="date" id="date" name="date" placeholder="YYYY-MM-DD" required min="<?php date_create()?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Enter a date in this formart YYYY-MM-DD" />
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
                                <label for="subject">Subject</label> <br>

										<SELECT name="subject" size="1" id="subject">
										<OPTION>Livraison non reçu
										<OPTION>Livraison non coforme
										<OPTION>Réparation et maintenance sous garantie
										<OPTION>Autre..
										</SELECT>

							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Envoyez" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

  <div class="animate-box" data-animate-effect="fadeIn">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.2799145891386!2d10.235151179498738!3d36.76385187754317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd360cb081667f%3A0xd4aa66b52e6f8a0b!2sRue+DE+LA+CHIMIE%2C+Megrine!5e0!3m2!1sfr!2stn!4v1549166133916" width="2000" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><br>
  </div>

   <div id="fh5co-started">
            <div class="container">

                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table-bordered">
                            <thead>
                            <th>Date depot rdv</th>
                            <th>Date du rdv</th>
                            <th>Objet du rdv</th>
                            <th>Etat du rdv</th>
                            <th>Supprimer </th>
                            <th>Modifier</th>
                            </thead>

                            <?php
                            foreach($list as $row)
                            {

                                echo "<tr><td>".$row['NOW_RDV'];"</td>";
                                echo "<td>".$row['DATE_RDV'];"</td>";
                                echo "<td>".$row['OBJET_RDV'];"</td>";
                                echo "<td>".$row['ETAT_RDV'];"</td></tr>";
                                ?>
                                <!-- <td><a href="../backOffice/nalika/deletedemande.php?sup=<?php// echo $row['ID_D'];?>">Supprimer</a></td>-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <td> <form method="post" action="supprimerRDV.php">
                                                <input type="submit" name="supprimer" class="btn-outline" value="  Supprimer">
                                                <input type="hidden" value="<?PHP echo $row['ID_RDV']; ?>" name="ID_RDV">
                                            </form>
                                        </td>
                                    </div>
                                </div>
                                <td>
																	<form method="GET" action="modifierRDV.php" >
																	<input type="submit" name="modifier" class="btn-outline" value="Modifier"/>

																				<input type="hidden" name="mod" value="<?php echo $row['ID_RDV'];?>"/>
																			</form>
                                </td>
                                <?php
                            }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
   </div>


        <footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Geoconcept</h3>
					<p>Nous proposons un mobilier au design contomporain et moderne , Nous allions style et économie.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Rendez-vous</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
