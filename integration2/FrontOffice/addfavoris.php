<?php session_start();
include_once '../core/favorisC.php';
include_once '../Entities/favoris.php';




if(empty($_SESSION['cin'])) {

                header('Location: signin.php');

  }

  if(!empty($_SESSION['cin'])) {
    $favorisc = new favorisC();
      if(!empty($_GET['nom'])){
    $favoris = new favoris($_SESSION['cin'],$_GET['nom'],$_GET['id'],$_GET['price']);


    $favorisc->ajouterFavoris($favoris);
}
    $list=$favorisc->listeFavoris();
        ?>

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
        				<h1><a style='font-size:50px; '> <img src="images/favoris.png" style="height: 35px; width: 35px; margin-left: 40px;"></a> Liste Favoris <small class="pull-right"></small></h1>
        			<hr class="soften"/>

        			<table class="table table-striped" >
        		              <thead>
        		                <tr>
        		                  <th>Produit</th>
        											<th>Nom</th>

                                                    <th>Prix</th>

        					        	</tr>
        		              </thead>
        <tbody class="cart-item">
        									<?php


        															foreach($list as $keys => $values)
        													 	{
        										?>

        				  <tr  class="cart-row" >
        		                 <td><img width="100" src="images/<?php echo $values["id_produit"]; ?>.jpg"></td>

        		                  <td><?php echo $values["nom_prod"]; ?></td>

                                  <td><?php echo $values["price"]; ?></td>

        											<td><a href="deleteFavoris.php?id=<?php echo $values["id_produit"]; ?>" value="supprimer"  >
                             <img src="images/delete.png" style="height: 25px; width: 25px;">
        											</a>
        										</td>

                                                <td><a href="addpanier2.php?name=<?php echo $values["nom_prod"]; ?>&id=<?php echo $values["id_produit"];  ?>&price=<?php echo $values["price"]; ?>">Acheter</a>
                        
                                                   
                                                </td>



        					 </tr>

        					 <?php

        }


        					 ?>



        						</tbody>
        		            </table><br/>



        			<a href="<?php echo $_SESSION["page"]; ?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>

              	<!--input type="submit" id="submit" class="shopBtn pull-right" name="ajouter" value="Acheter"-->
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


<?php } ?>
