<?PHP
include_once "../config.php";
require_once '../core/GestionPanier/paniers.class.c.php';
$db = config::getConnexion();
$panier= new panier();


if (isset($_SESSION['cin']) and $_SESSION['cin'] > 0 )
{
    $getcin=$_SESSION['cin'];
    $bdd = config::getConnexion();
    $requser=$bdd->prepare('SELECT * FROM membres WHERE cin = ?');
    $requser->execute(array($getcin));
    $userinfo = $requser->fetch();
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>Geoconcept &mdash; Vente et Location Meubles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="gettemplates.co" />


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

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/modal.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>


    	<script src="js/modernizr-2.6.2.min.js"></script>
    	<script src="store.js" async></script>
    	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
					<div id="fh5co-logo"><a href="product.php"><!--img src="images/logosn.png" alt="" width="35" style="margin: -4px 5px 0px 10px;" /-->GeoConcept.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="product.php">GeoInt</a>
							<ul class="dropdown">
								<li><a href="product.php">Consulter Produits Intérieur</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="product2.php">GeoExt</a>
							<ul class="dropdown">
								<li><a href="product2.php">Consulter Produits Extérieur</a></li>
							</ul>
						</li>

						<li class="has-dropdown">
							<a href="Louer.php">Location</a>
							<ul class="dropdown">
								<li><a href="Louer.php">Louer</a></li>

							</ul>
						</li>
<?php if(isset($_SESSION['cin'])){ ?>
						<li class="has-dropdown">
            <a href="contact.php">Contact</a>
            <ul class="dropdown">
              <li><a href="RDV.php">Rendez-vous</a></li>
              <li><a href="demande.php">Demandes</a></li>
              <li><a href="contact.php">Reclamer</a></li>

            </ul>

          </li>
          <li class="has-dropdown">
          <a href="addfavoris.php">Vos Favoris</a>

        </li>
        <?php } ?>

         <?php if(!isset($_SESSION['cin'])){ ?>
         <li><a href="signup.php">S'inscrire</a></li>
         <li><a href="signin.php">Se connecter</a></li>
       <?php } ?>

					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
                                <form role="search" method="POST" action="rechercher_produits.php">
						      <input type="text" name="search" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
						      </span>
                                </form>

						    </div>
						</li>
            <div style="display: flex;">
            <li class="shopping-cart">

          <div class="input-group mb-3" style="margin-top:10px; ">
              <a href="Panier.php" name="TotalProduits" ><span><small class="countcart"><?php echo $panier->count(); ?></small><i class="icon-shopping-cart"></i></span></a>
            </div>
          </li>
          <?php if(isset($_SESSION['cin'])){ ?>
          <li class="has-dropdown">
            <div style="margin-left:80px; ">
  <?php


  if (!empty($userinfo['avatar'])) {
      ?>
<a href="profile.php"><img src="membres/avatars/<?php echo $userinfo['avatar'];?>" style=" border-radius: 50%;  width: 40px; height: 40px;"/></a>

  <ul class="dropdown" style="margin-left:80px; width:80px">
      <li><a href="profile.php" class="deja2">Profile</a></li>
    <li><a href="logout.php" class="deja2">logout</a></li>
  </ul>
  <?php
  }
  else {
      ?>

      <a href="profile.php"><img src="images\profileicon3.jpg" style=" border-radius: 50%;  width: 40px; height: 40px;"/></a>

        <ul class="dropdown" style="margin-left:80px; width:80px">
            <li><a href="profile.php" class="deja2">Profile</a></li>
          <li><a href="logout.php" class="deja2">logout</a></li>
        </ul>
      <?php
  }
  ?>




</li>
<?php } ?>
  </div>      	</ul>
				</div>

			</div>

		</div>
	</nav>
