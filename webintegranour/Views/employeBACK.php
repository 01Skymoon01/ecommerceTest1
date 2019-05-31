
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
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
</head>

<body>

<?php require_once 'header.php' ?> <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="product-status mg-b-30" style="margin-top:10px">
            <div class="container-fluid" style="margin-top:20px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des livreurs</h4>

                            <div class="add-product" style="background: none;">
                                <a class="fa fa-user-plus fa-2x" href="AjouterEmployeBACK.php" style=" color: #8ed081;background: none;"></a>
                            </div>
                            <div>
<?PHP
include "../Core/employeC.php";
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
       <a class="fa fa-check-circle fa-2x" style="color: #24caa1;" href="etat.php?cin=<?php echo $row['cin']; ?>">  </a>
        <?php
    }
    else
    { ?>
        <a class="fa fa-times-circle fa-2x" style="color: #e8ddb5;" href="etat.php?cin=<?php echo $row['cin']; ?>"> </a>
        <?php
    }
    ?>
    </center></td>




       <td><center> <form method="POST" action="note.php" name="myForm">
                   <div class="stars stars-example-css detail-stars">
                       <div class="review-rating">
                           <form method="post" action="note.php">
                               <input type="hidden" value="<?php echo $row['cin']; ?>" name="cin" id="cin">
                                                            <!--            <fieldset class="rating" name="rating"> -->

                               <div class="row">
                                   <div class="col-lg-12">
                                       <div class="star-rating">
                                           <span class="fa fa-star-o" data-rating="1"></span>
                                           <span class="fa fa-star-o" data-rating="2"></span>
                                           <span class="fa fa-star-o" data-rating="3"></span>
                                           <span class="fa fa-star-o" data-rating="4"></span>
                                           <span class="fa fa-star-o" data-rating="5"></span>
                                           <input type="hidden" name="rating" class="rating-value" value="<?PHP echo $row['note']; ?>">
                                       </div>
                                   </div>
                               </div>

                               <input type="submit" value="rate" style="background-color: #ffa551; border:none;">
                           </form>
                           <a href="note.php?cin=<?php echo $row['cin'] ?>&amp;rate="></a>
                       </div>

                       <div class="clear"></div>
                                                            </div>
           </form></center>

        </td>


        <td><a class="btn btn-sm waves-effect" style="background-color:#e0e1dd; " href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
    <i class="fa fa-edit"></i></a></td>
        <td><a class="btn btn-sm waves-effect" style="background-color:#edd382; border:none;"  href="mailto:<?php echo $row['email'];?>"><i class="fa fa-envelope" style="color: white;"></i></a></td>

        <td><form method="POST" action="supprimerEmploye.php">
                <button type="submit" class="btn waves-effect btn-sm " name="supprimer" style="background-color:#fe5f55;" ><i class="fa fa-trash-o"></i></button>
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
<script>
        var $star_rating = $('.star-rating .fa');

        var SetRatingStar = function() {
            return $star_rating.each(function() {
                if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };

        $star_rating.on('click', function() {
            $star_rating.siblings('input.rating-value').val($(this).data('rating'));
            return SetRatingStar();
        });

        SetRatingStar();
        $(document).ready(function() {

        });
    </script>

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
