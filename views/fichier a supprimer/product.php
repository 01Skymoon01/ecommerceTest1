<?php require 'headerProduct.php';

?>
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
