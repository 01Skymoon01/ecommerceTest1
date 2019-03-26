

<?PHP
require '../core/GestionPanier/paniers.class.c.php';
include "../core/GestionCommande/commande.class.c.php";
$panier= new panier();
$commande1C=new commandeC();
?>
	<head>

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">


	<link rel="stylesheet" href="css/flexslider.css">


	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">


	<link rel="stylesheet" href="css/style.css">


	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="store.js" async></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Shop.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown active">
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

            						<li class="shopping-cart"><a href="Panier.php"><i class="icon-shopping-cart"></i></a></li>

            					<!-- FIN Total Des Produits -------------------------------------->
            					</ul>
            				</div>
            			</div>

            		</div>
            	</nav>
<!--DEBUT COMMANDE -------------------------------------------------------------------------------------------->
<div style="margin-top:10px; margin-bottom:20px; display: flex; background-color:A9A9A9; " >
 <?PHP

if(!empty($_SESSION["commande"]))
{
$idc=0;
$idcl=0;
$total = 0; ?>
  <table class="table table-borderless" style="margin-top:60px; margin-left:60px; margin-bottom:200px;
  background-color:white; width:300px ;
  border-radius:2px;

  position: relative;
  box-shadow: 0px 0px 2px #1c1a19;">
      <tr>

        <td>Commande N°: </td>

      </tr>
      <tr>

        <td>DATE: </td>

      </tr>

      <tr>

        <td>NOMBRE DE CTLG: </td>

      </tr>
      <tr>

        <td>VOTRE_ID: </td>

      </tr>

      <tr>

        <td class="table-active">PTS DE FIDELITE: </td>

      </tr>
			<tr>

				<td class="table-active">PRIX TOTAL: </td>

			</tr>

      <table class="table table-borderless" style="margin-top:60px; margin-right:50px;margin-bottom:200px;background-color:white; width:900px    ;


          position: relative;
          box-shadow: 2px 0px  2px#1c1a19;">
<tbody >
  <!--FIN COMMANDE -------------------------------------------------------------------------------------------->

<?PHP

foreach($_SESSION["commande"] as $row => $values)
{
?>
  <tr>

    <td><?PHP echo $values; ?></td>

  </tr>
  <?PHP
  if($total==0)
  {
    $idc=(int)$values;
  }
  if($total==3)
  {
    $idcl=(int)$values;
    ?>
    <?PHP
    $pts_f=$commande1C->afficherPTSFidelite($idcl);
    foreach($pts_f as $row){
    	?>
    	<tr>
    	<td><?PHP echo $row['PTS_FIDELITE']; ?></td>
    	</tr>
    	<?PHP
    }
  }
  $total++;
}
?>
</table>
</tbody>

  <table class="table table-bordered" style=" margin-top:60px; margin-left:20px; margin-right:150px;margin-bottom:200px; background-color:white; ">
    <thead>
      <tr>
        <th scope="col" class="table-light">Nom_Produit</th>
        <th scope="col" class="table-light">Qte_Produit</th>
        <th scope="col" class="table-light">PRIX_Produit</th>
        <th scope="col" class="table-light">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <?PHP
      $listeProduits=$commande1C->afficherDetailsCommandeEnCours($idc);
      foreach($listeProduits as $row){
      	?>
    	<tr>
    	<td><?PHP echo $row['Nom_Produit']; ?></td>
    	<td><?PHP echo $row['Qte_Produit']; ?></td>
    	<td><?PHP echo $row['PRIX_Produit']; ?></td>
    	<td><?PHP echo $row['TOTAL']; ?></td>
    	</tr>
    	<?PHP
    }

    $_SESSION["panier"]=array();
    $_SESSION["commande"]=array();
    }
    ?>
    </tbody>


  </table>
</table>
</div>


              <!--FIN COMMANDE -------------------------------------------------------------------------------------------->


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Shop.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
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
	<!-- Main -->
	<script src="js/main.js"></script>
	<script type="text/javascript" src="app.js" ></script>

	</body>
