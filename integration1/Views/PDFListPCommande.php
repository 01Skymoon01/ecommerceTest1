<?php
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";
if (isset($_GET["cin"])){
$CommandeC1=new CommandeC();
$listeCommande=$CommandeC1->afficherDetailsCommandeEnCours($_GET["cin"]);
 ?>



<head style="background-color:white; color:white;">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product List GeoConcept</title>
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

<body style="background-color:white;" onload="window.print()">

        <!-- HOUNII COMMANDE§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§-->
        <div class="product-status mg-b-30" style="margin-top:50px;">
            <div class="container-fluid">
                <div class="row" style="margin-top: 5%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap" style="background-color:white;">
                          <h3  style="color:black;">GEOCONCEPT.
                             COMMANDE: <?php echo $_GET["cin"] ?></h3>

                            <div   class="add-product" style="background-color:white;">
                                <a style="background-color:white;"><h5 style="color:black;">DATE:  Tunis,le <?php echo $_GET["date"] ?></h5></a>
                            </div>
                            <div  style="background-color:white;">
                                <a style="background-color:white;"><h5 style="color:black;">Pour CIN: .<?php echo $_GET["cinC"] ?></h5></a>
                            </div><br>
                            <table style="border:none; width:300px">
                              <tr>
                            <td>
                                <a><h5 style="color:black;">DATE: </h5></a>
                            </td>
                            <td>
                                <a><h5 style="color:black;"> Tunis,le <?php echo $_GET["date"] ?></h5></a>
                            </td>
                          </tr>
                            <tr>
                              <td>
                                <a><h5 style="color:black;">Etat:</h5></a>
                              </td>
                            <td>
                                <a><h5 style="color:black;"><?PHP if($_GET['etat'] == 1) echo "PAYE" ; else echo "NON PAYE" ?></h5></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a><h5 style="color:black;">QTE_TOTAL:</h5></a>
                                </td>
                                <td>
                                  <a><h5 style="color:black;"><?PHP
                                  $i=0;

                                  foreach($listeCommande as $row){

                                    $total=$row['TOTAL'];
                                    $i=$i+$row['Qte_Produit'];
                                  }
                                  echo $i;
                                  ?></h5></a>
                                  </td>
                         </tr>



                      </table>
                            <table border=1px>
                              <tr >
                                    <th style="color:black;">NOM PRODUIT</th>
                                    <th style="color:black;">QUANTITES</th>
                                    <th style="color:black;">PRIX</th>
                                    <th style="color:black;">PRIX TOTAL</th>



                                </tr>


<form action="SupprimerCommande.php" method="GET">


<?php
$listeCommande=$CommandeC1->afficherDetailsCommandeEnCours($_GET["cin"]);
 foreach($listeCommande as $row){ ?>
                                <tr style="background-color:black;">

                                    <td><?PHP echo $row['Nom_Produit']; ?></td>
                                    <td><?PHP echo $row['Qte_Produit']; ?></td>
                                    <td><?PHP echo $row['PRIX_Produit']; ?> TDN</td>
                                    <td><?PHP echo $row['TOTAL']; ?> TDN</td>



                                </tr>
<?php }?>
<tr style="background-color:white; border:none;">

    <td></td>
    <td></td>
    <td style="color:black; border:1px">TOTAL :</td>
    <td style="color:black; border:1px"><?PHP echo $_GET['totalTTC']; ?> TDN</td>



</tr>
                            </table>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>


<?php }

?>
