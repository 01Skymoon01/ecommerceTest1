<?php
require_once 'header.php';
if (isset($_SESSION['cin'])){
include_once '../core/DemandeC.php';
$demandec= new DemandeC();
$list=$demandec->afficherDemande($_SESSION['cin']);
?>


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

					<div class="row animate-box" style="  margin: auto; padding: 10px;" >

					<div class="row" >
					<div class="span12">

					<div class="well well-small" style="margin-left:10% ; width:1200px">
						<h1>Liste de Vos Demandes<small class="pull-right"></small></h1>
						<h6> Vous ne pourrez plus modifier ou suprimer apres miniut.<small class="pull-right"></small></h6>
					<hr class="soften"/>

					<table class="table table-striped" >
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
<?php }else {   header('Location: signin.php'); } ?>
