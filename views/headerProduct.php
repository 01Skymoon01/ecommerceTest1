<?PHP
include "../config.php";
require '../core/GestionPanier/paniers.class.c.php';
$panier= new panier();
$_SESSION["commande"]=array(); //****TANSECHHHHHHHHHHHHHHHHHHH!!
unset($_SESSION["commande"]); //****TANSECHHHHHHHHHHHHHHHHHHH!!

var_dump($_SESSION);
?>

	<head>
	<meta charset="utf-8">

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->


	<!-- Animate.css -->
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
	<script src="js/respond.min.js"></script>
	<![endif]-->


	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html">GeoConcept.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="product.html">GeoInt</a>
							<ul class="dropdown">
								<li><a href="single.html">Consulter Produits Intérieur</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="product2.html">GeoExt</a>
							<ul class="dropdown">
								<li><a href="single.html">Consulter Produits Extérieur</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Fabrication</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
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
						<!-- Debut Total Des Produits -------------------------------------->

						<li class="shopping-cart"><a href="Panier.php" name="TotalProduits" class="cart"><span><small></small><i class="icon-shopping-cart"></i></span></a></li>

											<!-- FIN Total Des Produits -------------------------------------->
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/Baniere1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Meubles</h1>
							<h2>Interieurs</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-product">
			<div class="container">

				<!-- DeBut Produit a Ajouter EXEMPLE ------------------------------->

					<?php

		$query = "SELECT * FROM products ";
		$db = config::getConnexion();
		$liste=$db->query($query);

	foreach($liste as $row){
		?>
		<form>
				<div class="col-md-4 text-center ">

					<div class="product">
						<div class="product-grid" style="background-image:url(images/<?php echo $row["id"];?>.jpg.jpg);">
							<div class="inner">
								<p>
									<a href="addpanier.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&price=<?php echo $row["price"]; ?>"  class="icon addpanier" ><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>

						</div>
						<div class="desc">

							<input type="text" name="desc" value="<?php echo $row["name"]; ?>">
							<input type="number" class="price" name="price" value="<?= $row["price"] ?>">
						</div>
					</div>

				</div>
							</form>
				<?php

					}
				?>

				<!-- Fin Produit a Ajouter EXEMPLE ----------------------------------------->
			</div>
		</div>

		<div id="fh5co-started">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Besoin d'aide ? </h2>
						<p>Inscrivez vous pour suivre nos produits et nouveautés</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form class="form-inline">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-default btn-block">Inscrivez-Vous</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget">
						<h3>GeoConcept.</h3>
						<p>Nous proposons un mobilier au design contomporain et moderne , Nous allions style et économie.</p>
						<p></p>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">About</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Meetups</a></li>
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
							<small class="block">&copy; GeoConcept. All Rights Reserved.</small>
							<small class="block">28 <a href="http://freehtml5.co/" target="_blank">Rue Chimie</a> Megrine <a href="http://blog.gessato.com/" target="_blank">Tunis</a><a href="http://unsplash.co/" target="_blank"></a></small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/geoconceptgeovrde" target="_blank"><i class="icon-facebook" ></i></a></li>
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
		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
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
		<!-- Main -->

		<script src="js/main.js"></script>

		<script type="text/javascript" src="app.js" ></script>
		</body>
	</html>
