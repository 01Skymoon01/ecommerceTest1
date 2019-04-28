<!doctype html>
<html class="no-js" lang="en">
<?php

include_once "../core/locationC.php";
$location1C= new locationC();
$liste=$location1C->AfficherLocc();


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liste des Reclamations</title>
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
  <?php require 'header.php' ?>

        <div class="product-status mg-b-30" style="margin-top:10px">
            <div class="container-fluid" style="margin-top:20px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des reclamations</h4>
                            <form action="locationBack.php" method="GET">
                              <div style="display: flex;margin-bottom:10px;">

                          </div>
                          </form>
                            <table>
                                <tr>
                                  <th></th>
                                  <th>n°</th>
                                    <th>date</th>
                                    <th>prix</th>
                                    <th>QTE</th>
                                    <th>id client</th>
                                    <th>etat</th>
                                   <th>datails</th>

                                </tr>


                                <?PHP


                                foreach($liste as $row){ ?>
                                  <?PHP if($row['etat_commande'] == 0){

                                    ?>
                                                                  <tr style="background-color:#3B6B9A;">

                                  <?PHP } else if($row['etat_commande'] == 1) {
                                     ?>

                                                                  <tr style="background-color:#365D84;">
                                      <?php }      ?>
                                                                    <td>
                                                                    <form action="supprimerLocation.php" method="GET">
                                                                     <input type="submit" value="X" style="border: 0; background: none; font-size:16.2; font-weight: 700;">
                                                                     <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
                                                                     </form>
                                                                                                        </td>
                                                                    <td><?PHP echo $row['id_commande']; ?></td>
                                                                    <td><?PHP echo $row['date_commande']; ?></td>
                                                                    <td><?PHP echo $row['totalPrix_commande']; ?> TDN</td>
                                                                    <td><?PHP echo $row['nbProduit_commande']; ?></td>
                                                                    <td><?PHP echo $row['id_client']; ?></td>
                                                                    <td>
                                                                    <form action="ModifierLocation.php" method="GET"><i class="icon nalika-edit"></i>
                                              <input type="submit" value="<?PHP if($row['etat_commande'] == 1) echo "VALIDE" ; else echo "NON" ?>" style="border: 0px; background: none;">
                                                                    <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
                                                                    <input type="hidden" value="<?PHP echo $row['etat_commande']; ?>" name="etat">

                                                                    </form></td>
                                                                                                        <td>
                                                                    <form action="DetailsLoc.php" method="GET">
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
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
