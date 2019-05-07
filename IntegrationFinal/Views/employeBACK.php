
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liste livreurs</title>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <?php require 'header.php' ?>
        <div class="product-status mg-b-30" style="margin-top:10px">
            <div class="container-fluid" style="margin-top:20px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des livreurs</h4>

                            <div class="add-product">
                                <a href="AjouterEmployeBACK.php">Ajouter livreur</a>
                            </div>
                            <div>
<?PHP
include "../core/employeC.php";
$livreur1C=new LivreurC();
$listeLivreurs=$livreur1C->afficherLivreurs();
?>
<table>
<tr>
<th><center>Cin</center></th>
<th><center>Nom</center></th>
<th><center>Prenom</center></th>
<th><center>Telephone</center></th>
<th><center>Email</center></th>
<th><center>Zone</center></th>
<th><center>Disponibilite</center></th>
<th><center>Notes</center></th>


</tr>

<?PHP
foreach($listeLivreurs as $row){
	?>
	<tr style="background-color:#365D84;">
	<td ><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['telephonne']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['zone']; ?></td>
    <td><center><?PHP if ($row['status']==0)
    { ?>
       <a href="etat.php?cin=<?php echo $row['cin']; ?>">  <img src="img/dispo.png" style="height: 25px; width: 25px;"> </a>
        <?php
    }
    else
    { ?>
        <a href="etat.php?cin=<?php echo $row['cin']; ?>"> <img src="img/nondispo.png" style="height: 22px; width: 22px;"></a>
        <?php
    }
    ?>
    </center></td>




       <td><center> <form method="POST" action="note.php" name="myForm"> <div class="stars stars-example-css detail-stars">
                                                                 <div class="review-rating">
                                                                     <form method="post" action="note.php">
                                                                         <input type="hidden" value="<?php echo $row['cin']; ?>" name="cin" id="cin">
                                                            <!--            <fieldset class="rating" name="rating"> -->









                                                                        <input type="radio" id="starhalf" name="rating" value="0,5">
                                                                        <label class="half" for="starhalf"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1">
                                                                        <label class="full" for="star1"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1,5">
                                                                        <label class="half" for="star1half"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2">
                                                                        <label class="full" for="star2"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2,5">
                                                                        <label class="half" for="star2half"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3">
                                                                        <label class="full" for="star3"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3,5">
                                                                        <label class="half" for="star3half"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4">
                                                                        <label class="full" for="star4"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4,5">
                                                                        <label class="half" for="star4half"></label>
                                                                        <input type="radio" id="star5" name="rating" value="5">
                                                                        <label class="full" for="star5"></label>
                                                                      <!--  </fieldset> -->
                                                                         <input type="submit" value="rate" style="background-color: #ffa551; border:none;">
                                                                         </form>
                                                                        <a href="note.php?cin=<?php echo $row['cin'] ?>&amp;rate="></a>
                                                                        <?PHP echo $row['note']; ?>
                                                                </div>

                                                                <div class="clear"></div>
                                                            </div>
           </form></center>
        </td>


        <td><a class="btn btn-default btn-sm" style="border:none;" href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
    Modifier</a></td>
        <td><a class="btn btn-default btn-sm" style="background-color:#ffa551; color: white; border:none; " href="mailto:<?php echo $row['email'];?>">Contacter</a></td>

        <td><form method="POST" action="supprimerEmploye.php">
    <input type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" style="background:none; border:none;" name="supprimer" value="X">
    <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
    </form>
    </td>

	</tr>
	<?PHP
}
?>
</table>
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
