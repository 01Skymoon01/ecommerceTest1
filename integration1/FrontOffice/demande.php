<?php
session_start();
include '../core/DemandeC.php';
$demandec= new DemandeC();
$list=$demandec->afficherDemande($_SESSION['cin']);
?>
<!DOCTYPE HTML>
<html>
<head>

   <!-- <script type="text/javascript">
        function valider()
        {
            if(formular.message.length != 8)
            {
                alert("verifiez telephone");
                return false;
            }
            else
            {
                return true;
            }
        }

    </script>-->
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

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/demande.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1> Demandes</h1>
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
					<h3>Déposez vos demandes</h3>
					<form method="post" name="formular" action="ajouterDemande.php">
                        <input type="hidden" id="user" name="user" value="<?php echo$_SESSION['cin'];?>">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="lname">Nomde de votre groupe:</label>
								<input type="text" id="lname" name="lname" class="form-control" required placeholder="Nom du groupe">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="num">Numero:</label>
                                <input type="number" id="num" name="num" class="form-control"  min="10000000" max="99999999" required  placeholder="Votre numéro: +216">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								 <label for="subject">Subject:</label>
								<!--<input type="text" id="subject" class="form-control" placeholder="Sujet">-->
									<SELECT name="subject" size="1" id="subject" >
										<OPTION value="partenariat">Partenariat</OPTION>
										<OPTION value="sponsoring">Sponsoring</OPTION>
									</SELECT>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								 <label for="message">Details:</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" required placeholder="Developpez votre demande"></textarea>
							</div>
						</div>

						<input type="submit" id ="envoyer" name="envoyer" class="btn btn-primary" value="envoyer" />


					</form>
				</div>
			</div>

		</div>
	</div>



	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<table class="table-bordered">
                        <thead>
                        <th>Date de la demande</th>
                        <th>Nom de la societe</th>
                        <th>Numero telephone</th>
                        <th>Objet de la demande</th>
                        <th>Détails de la demande</th>
                        <th>Etat de la demande</th>
                        <th> Supprimer </th>
                        <th> Modifier</th>
                        </thead>

                        <?php
                            foreach($list as $row)
                            {

                                echo "<tr><td>".$row['DATE_DEMANDE'];"</td>";
                                echo "<td>".$row['NOM_D'];"</td>";
                                echo "<td>".$row['NUM_D'];"</td>";
                                echo "<td>".$row['OBJET_D'];"</td>";
                                echo "<td>".$row['DETAILS_D'];"</td>";
                                echo "<td>".$row['ETAT_D'];"</td></tr>";
                                ?>
                                  <!-- <td><a href="../backOffice/nalika/deletedemande.php?sup=<?php// echo $row['ID_D'];?>">Supprimer</a></td>-->
                        <div class="row">
                            <div class="col-md-12">
                                <td> <form method="post" action="supprimerDemande.php">
                                        <input type="submit" name="supprimer" class="btn-outline" value="  Supprimer">
                                        <input type="hidden" value="<?PHP echo $row['ID_D']; ?>" name="ID_D">
                                    </form>
                                </td>
                            </div>
                        </div>
                                <td>

																		<form method="GET" action="modifierdemande.php" >
																				<input type="submit" name="modifier" class="btn-outline" value="Modifier"/>

																							<input type="hidden" name="mod" value="<?php echo $row['ID_D'];?>"/>
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


<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>
