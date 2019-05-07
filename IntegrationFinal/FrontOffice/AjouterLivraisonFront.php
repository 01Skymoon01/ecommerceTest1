<?PHP
include "../Entities/livraison.php";
include "../Core/livraisonC.php";
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";


if ( isset($_POST['idcommande']) and isset($_POST['destination']))
{

$livraison1C=new LivraisonC();
    $livreurC=new LivreurC();
    $result=$livreurC->afficher1LivreurDispo();
    foreach($result as $row){
    $cinLivreur=$row['cin'] ;
    }
    $livraison1C->ajouterLivraisonFromFront($_POST['idcommande'],$_POST['destination'],$cinLivreur);
    $CommandeC1=new CommandeC();
$CommandeC1->modifierEtatLivraison($_POST['idcommande']);

    header('Location: ValideLivraison.php');


}

?>
<?php
require_once 'header.php';
if (isset($_SESSION['cin'])){

?>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row" style="margin-left:30%">
				<div class="col-md-6 animate-box">
					<h3><i class="fa fa-truck icon-wrap"></i> Déposez vos informations</h3>

          <form method="POST" name="formular" action="AjouterLivraisonFront.php">
<input type="hidden" name="idcommande" value="<?php echo $_GET['idcommande']; ?>">
								<label for="lname">Destination:</label>
								<input type="text" id="lname" name="destination" class="form-control" required placeholder="Adresse.."/>

								<label for="num">Code Postal:</label>
                                <input type="number" id="num" name="code" class="form-control"  min="0000" max="9999" required  placeholder="Code Postal..">




						<input type="submit" id ="envoyer" name="envoyer" class="btn btn-primary" value="envoyer" style="margin-top:10px;" />


					</form>
				</div>
			</div>

		</div>
	</div>




<?php require "footer.php" ?>


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
