
<?php require 'header.php';
 ?>

<!-- DeBut CONSULTER PANIER ---------------------------------------------------------------------------------->
<style>
input[type=submit] {
    padding:5px 15px;
    color:#808080;
		background: none;
    border:none;
    cursor:pointer;

}
input[type=submit]:hover {
	color:#D2B48C;
}
input[type=submit]:focus {
    color:#D2B48C;
}
</style>



<form method="POST" action="addCommande.php">
	<div id="fh5co-started">

			<div class="row animate-box" style="  margin: auto; padding: 10px;" >

			<div class="row" >
			<div class="span12">

			<div class="well well-small" style="margin-left:20% ; width:900px">
				<h1>Check Out <small class="pull-right"></small></h1>
			<hr class="soften"/>


			<table class="table table-striped" >
		              <thead>
		                <tr>
		                  <th>Produit</th>
											<th>Nom</th>
		                  <th>Prix</th>

                     <th>Quantite</th>
					        	</tr>
		              </thead>
<tbody class="cart-item">
									<?php
														if(!empty($_SESSION["panier"]))
														{
															$total = 0;
															foreach($_SESSION["panier"] as $keys => $values)
													 	{
										?>

				  <tr  class="cart-row" >
		                 <td><img width="100" src="images/<?php echo $values["item_id"]; ?>.jpg">
                     </td>

		                  <td><?php echo $values["item_name"]; ?>
                        <?php $item_id=(int)$values["item_id"];
                         $sql="SELECT qte FROM produits WHERE num='$item_id'";
                                    $req=$db->prepare($sql);
                                    $req->execute();
                                    $liste=$req->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($liste as $product){ ?>
                      </br><span><small>(Seulement <?php echo $product->qte; ?> reste en stock)</small></span></td>

											<td class="priceCart"><?php print_r($values["item_price"]); ?> TND</td>

                      <td>
                        <input type="hidden" class="quantityVrif" value="<?php echo $product->qte; ?>">
    <?php                     }
                                  ?>
                        <input type="number" class="quantity" name="panier[qte][<?php print_r($values["item_id"]); ?>]" style="max-width:100px" placeholder="1" size="16" type="number" value="<?php print_r($values["item_quantity"]); ?>"></td>

											<td><a class="remove deletepanier" href="deletePanier.php?id=<?php echo $values["item_id"]; ?>" value="supprimer"  >
                     X
											</a>
										</td>



					 </tr>

					 <?php
					 $total = $total + $values["item_price"];
}


					 ?>

		               <tr>

										 <td></td>
										 <td></td>

		                  <td style="color:#000000;">Total products:	</td>
		                  <td class="total" style="color:#000000;"><?php print_r($total); ?> TND</td>
                      <td></td>
											<input type="hidden" name="prix" value="<?php print_r($total); ?>">
											<input type="hidden" name="qtte" value="<?php print_r(count($_SESSION["panier"])); ?>">
                  </tr>
									<?php
									}
									?>
						</tbody>
		            </table><br/>



			<a href="<?php echo $_SESSION["page"]; ?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>

      	<input type="submit" id="submit" class="shopBtn pull-right" name="ajouter" value="Acheter">
		</div>

		</div>
	</div>


   </div>
	</div>

</form>
<!-- FIN CONSULTER PANIER ----------------------------------------------------------------------------------------->





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
