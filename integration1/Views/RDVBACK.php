<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liste des RDV</title>
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
                            <h4>Liste des Rendez-vous</h4>
                            <div class="add-product">
                                <!---<a href="product-edit.html">Add Product</a>-->
                            </div>
                            <table>
                                <tr>
                                    <th>Date depot rdv</th>
                                    <th>Date rdv</th>
                                    <th>Sujet rdv</th>
                                    <th>Etat rdv </th>
                                    <th>Nom user</th>
                                    <th>Prenom user</th>

                                </tr>

                                <?php include "../core/RdvC.php";
                                $rdvC = new RdvC();
                                $dd= date_create()->format('Y-m-d');
                                $listerdv = $rdvC->afficherRDVs();
                                ?>
                                <?PHP
                                foreach($listerdv as $row){
                                if ($dd >= $row['NOW_RDV']) {
                                ?>

                                <tr>
                                    <td><?PHP echo $row['NOW_RDV']; ?></td>
                                    <td><?PHP echo $row['DATE_RDV']; ?></td>
                                    <td><?PHP echo $row['OBJET_RDV']; ?></td>
                                    <td><?PHP echo $row['ETAT_RDV']; ?></td>
                                    <td><?php echo $row['nom']?></td>
                                    <td><?php echo $row['prenom']?></td>

                                    <td> <form method="post" action="accepterRDV.php">
                                            <input type="hidden" value="<?PHP echo $row['ID_RDV']; ?>" name="ID_RDV">
                                        <button class="btn btn-custon-three btn-success">Accepter</button>
                                        </form>
                                    </td>

                                    <td> <form method="post" action="refuserRDV.php">
                                            <input type="hidden" value="<?PHP echo $row['ID_RDV']; ?>" name="ID_RDV">
                                            <button class="btn btn-custon-three btn-danger" >Refuser</button>
                                        </form>
                                    </td>

                                    <!-- <button data-toggle="tooltip" title="Trash" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>-->
                                    <!-- <a href="deletedemande.php?sup=<?php //echo $row['ID_D'];?>" class="fa fa-trash-o"></a>-->
                                    <td> <form method="post" action="deleteRDV.php">
                                            <button data-toggle="tooltip" title="Trash" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                            <!-- <input type="submit" name="supprimer" class="nalika-delete-button" value="Supprimer">-->
                                            <input type="hidden" value="<?PHP echo $row['ID_RDV']; ?>" name="ID_RDV">
                                        </form>

                                    </td>
                                </tr>

                                <?php }}?>
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
