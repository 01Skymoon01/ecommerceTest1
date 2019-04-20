<?php
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";

$CommandeC1=new CommandeC();

$listeCommande=$CommandeC1->afficherTouTCommande();

 ?>


<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product List | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>


  <!-- Start Welcome area -->

      <div class="header-advance-area">
          <div class="header-top-area">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="header-top-wraper">
                              <div class="row">
                                  <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                      <div class="menu-switcher-pro">

                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                      <div class="header-top-menu tabl-d-n">

                                      </div>
                                  </div>
                                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                      <div class="header-right-info">
                                          <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                              <li class="nav-item">
                                                  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="icon nalika-user" aria-hidden="true"></i>
                            <span class="admin-name"></span>

                            <a href="login-form/logout.php"><span class="icon nalika-unlocked author-log-ic"></span></a>
                          </a>

                                              </li>

                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">


            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/logo/logo.jpg" alt="" /></a>
					<h2>GEOCONCEPT <span class="min-dtn">.</span></h2>

				</div>

			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="icon nalika-bar-chart icon-wrap"></li>
								   <span class="mini-click-non">Gestions</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">

                                <li><a title="Analytics" href="CommandeList.php"><span class="mini-sub-pro">Commandes</span></a></li>

                            </ul>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" >
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
        <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
        <div class="section-admin container-fluid res-mg-t-15" style="margin-top:50px;">
            <div class="row admin text-center" style="margin-top:50px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn" style="background-color:white;color:black;"><div class="stats-icon pull-right">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                </div>
                                <h4 class="text-left text-uppercase" style="color:black;"><b>Client Plus Fidele</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin" style="color:green;font-size:30px;">N°.<?php $ClientFidele=$CommandeC1->ClientPlusFidele();
                                        {
                                          foreach($ClientFidele as $row){
                                            echo $row["id_client"];
                                          }
                                        }?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                              <div class="stats-icon pull-right">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="text-left text-uppercase" style="color:black;"><b>Produit Plus Achete</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin" style="color:#3B6B9A;font-size:30px; "><?php $ClientFidele=$CommandeC1->ProduitBestSaler();
                                        {
                                          foreach($ClientFidele as $row){
                                            echo $row["Nom_Produit"];
                                          }
                                        }?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >

                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                              <div class="stats-icon pull-right">
                                          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                      </div>
                                <h4 class="text-left text-uppercase" style="color:black; "><b>Non Valide</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin" style="color:red;font-size:30px; "><?php $ClientFidele=$CommandeC1->NombreDuCommandeNonPayees();
                                        {
                                          foreach($ClientFidele as $row){
                                            echo $row["nbr"];
                                          }
                                        }?> commandes</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red "></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                              <div class="stats-icon pull-right">
                              <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                                <h4 class="text-left text-uppercase" style="color:black; "><b>Revenue Du Jour:</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin" style="color:#663399;font-size:30px; "><?php $ClientFidele=$CommandeC1->RevenueParJour();
                                        {
                                          foreach($ClientFidele as $row){
                                            echo $row["revenue"];
                                          }
                                        }?> TDN</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- HOUNII COMMANDE§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§-->
        <div class="product-status mg-b-30" style="margin-top:50px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                          <div>
                            <h4>Liste des commandes</h4>
                          </div>
  <form action="CommandeList.php" method="GET">
    <div style="display: flex;">
<div class="input-group mb-3" >
  <input type="text" class="form-control"placeholder="Search..." aria-label="" aria-describedby="basic-addon1" style="color:white;" name="search">
</div>
<div class=" mb-2" style="margin-left:6px; margin-top:5px;">
   <input type="submit" name="recherche" value="OK" style="
background-color:#6090;
border-style: outset;

border-radius: 5px;
border-color: black;

padding: 6px;
background-color: rgb(255, 255, 255); " >

</div>
</div>
</form>


                            <div class="add-product">

                            </div>
                            <table>
                                <tr>
                                   <th>   </th>
                                    <th>N°</th>
                                    <th>DATE</th>
                                    <th>PRIX TOTAL</th>
                                    <th>NOMBRE C°</th>
                                    <th>CIN CLIENT</th>
                                    <th>ETAT DE PAYMENT</th>
                                    <th>DETAILS</th>

                                </tr>


<form action="SupprimerCommande.php" method="GET">


<?php
if (isset($_GET["search"]) && $_GET["search"]!=""){

//  var_dump($_GET["cin"]);

	$listeCommande=$CommandeC1->RechercheCommande($_GET["search"]);

}

foreach($listeCommande as $row){ ?>
  <?PHP if($row['etat_commande'] == 0){  ?>
                                  <tr style="background-color:#3B6B9A;">

  <?PHP } else if($row['etat_commande'] == 1) { ?>
                                  <tr style="background-color:#365D84;">
      <?php }      ?>
                                    <td>
                                    <form action="SupprimerCommande.php" method="GET">
                                        <!-- i class="fa fa-trash-o" aria-hidden="true"-->  <input type="submit" value="X" style="border: 0; background: none; font-size:16.2; font-weight: 700;">
                                     <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
                                     </form>
                                                                        </td>
                                    <td><?PHP echo $row['id_commande']; ?></td>
                                    <td><?PHP echo $row['date_commande']; ?></td>
                                    <td><?PHP echo $row['totalPrix_commande']; ?> TDN</td>
                                    <td><?PHP echo $row['nbProduit_commande']; ?></td>
                                    <td><?PHP echo $row['id_client']; ?></td>
                                    <td>
                                    <form action="ModifierCommande.php" method="GET"><i class="icon nalika-edit"></i>
              <input type="submit" value="<?PHP if($row['etat_commande'] == 1) echo "VALIDE" ; else echo "NON" ?>" style="border: 0px; background: none;">
                                    <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
                                    <input type="hidden" value="<?PHP echo $row['etat_commande']; ?>" name="etat">

                                    </form></td>
                                                                        <td>
                                    <form action="DetailsCommandeList.php" method="GET">
                                                                        <input type="submit" value=">" style="border: 0; background: none; font-size:20px; font-weight: 900;">
                                    <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
                                    <input type="hidden" value="<?PHP echo $row['date_commande']; ?>" name="date">
                                    <input type="hidden" value="<?PHP echo $row['etat_commande']; ?>" name="etat">
                                    <input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="cinC">
                                    <input type="hidden" value="<?PHP echo $row['totalPrix_commande']; ?>" name="totalTTC">
                                    </form>
                                                                    </td>
                                </tr>
<?php }?>
                            </table>
</form>

                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="CommandeList.php">Retour</a></li>

								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>


    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

    <!-- Modernizr JS -->
    <script src="../views/js/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->
    <script src="../views/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../views/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../views/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../views/js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="../views/js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="../views/js/jquery.countTo.js"></script>
    <!-- Flexslider -->
    <script src="../views/js/jquery.flexslider-min.js"></script>
    <!-- Main -->

    <script src="../views/js/main.js"></script>
    	<script type="text/javascript" src="../views/app.js" ></script>
</body>

</html>
