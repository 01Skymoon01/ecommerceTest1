

<?php require 'header.php'; ?>
<?PHP
include_once "../core/GestionCommande/commande.class.c.php";
$commande1C=new commandeC();
?>

<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
text-align: left;

}



th {
  background-color: #808080;
  color: white;
}


</style>
<!--DEBUT COMMANDE -------------------------------------------------------------------------------------------->
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/Baniere1.jpg);height:500px;">

  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="display-t">
          <div class="display-tc animate-box" data-animate-effect="fadeIn">
            <h1>Merci pour Votre Confiance</h1>
            <h2>Commande Bien envoye</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="animate-box fadeInUp animated-fast">
					<h3 style=" margin-left:40%; margin-top: 600px;   text-decoration: overline;" >Votre Commande</h3>

  <div style=" margin: auto;
                     width: 100%;
                     padding: auto; display: flex; background-color:white; ">
 <?PHP

if(!empty($_SESSION["commande"]))
{
$idc=0;
$idcl=0;
$total = 0; ?>

<fieldset class="table table-borderless" style="margin-top:60px; margin-left:60px; margin-bottom:100px;width:400px ;position: relative;">

  <table  style=" margin: auto; padding: auto;  ">

  <!--FIN COMMANDE -------------------------------------------------------------------------------------------->
  <?PHP

  foreach($_SESSION["commande"] as $row => $values)
  {
  ?>
  <?php
    if($total==0)
    {
      $idc=(int)$values;
      ?>
      <tr>
        <td>Commande N°: </td>
        <td><?PHP echo $values; ?></td>

      </tr>
      <?php
    }?>
    <?php
      if($total==1)
      {
        ?>
        <tr>
          <td>DATE: </td>
          <td><?PHP echo $values; ?></td>

        </tr>
        <?php
      }?>
      <?php
        if($total==2)
        {
          ?>
          <tr>
            <td>NOMBRE DE CTLG: </td>
            <td><?PHP echo $values; ?></td>

          </tr>
          <?php
        }?>

    <?php
    if($total==3)
    {
      $idcl=(int)$values;
      ?>
      <?PHP
      $pts_f=$commande1C->afficherPTSFidelite($idcl);
      foreach($pts_f as $row){
      	?>
      	<tr>
                <td class="table-active">PTS DE FIDELITE: </td>
      	<td><?PHP echo $row['PTS_FIDELITE']; ?></td>
      	</tr>
      	<?PHP
      }
      $total++;
    }
    ?>
    <?php
        if($total==4)
      {
        ?>
        <tr>
          <td>VOTRE_ID: </td>
          <td><?PHP echo $values; ?></td>

        </tr>
        <?php
      }?>

    <?php
      if($total==5)
      {
        ?>
        <tr>
          <td style="background-color: #f5f5f5;">PRIX TOTAL: </td>
          <td style="background-color: #f5f5f5;"><?PHP echo $values; ?> TND</td>

        </tr>
        <?php
      }
    $total++;
  }
  ?>
</table>
</fieldset>
  <table  style=" margin: auto; padding: auto; margin-top:80px; background-color:#f5f5f5; width: 60%; ">

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

?>
  </table>
<?php
    }
   $_SESSION["panier"]=array();
  $_SESSION["commande"]=array();
    ?>
    </tbody>


</div>

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
