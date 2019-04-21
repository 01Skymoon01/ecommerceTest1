<?php require_once '../Core/ProduitIntC.php'; ?>

<?php
$produitC=new ProduitIntC();
if (isset($_POST["num"])) {
    $var = $_POST["num"];
    $sql = "SELECT * FROM  produits WHERE num=:var";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':var', $var);
    $req->execute();
    $liste = $req->fetch(PDO::FETCH_OBJ);
    //var_dump($liste);
}
else {
    header('Location: 500.html');
}
?>





<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details | Nalika - Material Admin Template</title>
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
<?php require_once 'header.php'; ?>
        <!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Details Produit : <button class="btn btn-warning" value=""><?php echo $liste->nom; ?></button>  </h2>
                                    <p>Details Produit<span class="bread-ntd"> GeoConcept</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <form role="search" class="" method="POST" action="rechercher_produit.php">
                                    <input name="search" type="text" placeholder="Rechercher Produits.." class="form-control" style="width: 40%;margin-left: 40%;color: white;">
                                    <button type="submit" class="btn btn-custon-four btn-default" style="position: absolute; top: 7%; left: 40%;margin-left: 30%;border: none;background-color:;" ><i class="fa fa-search"></i></button>
                                </form>
                                <a href="TelechargerListe.php" class="button" target="_blank">
                                    <button data-toggle="tooltip" data-placement="left"  title="Telecharger Liste Produits PDF" class="btn"><i class="icon nalika-download"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Single pro tab start-->
    <div class="single-product-tab-area mg-t-0 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-product-pr">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div id="myTabContent1" class="tab-content">
                                    <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                        <img src="../FrontOffice/images/<?php echo $liste->num; ?>.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-details res-pro-tb">
                                    <h1><?php echo $liste->nom ?></h1>
                                    <span class="single-pro-star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
                                    <div class="single-pro-price">
                                        <span class="single-regular"><?php echo $liste->prix; ?></span><span class="single-old">TND</span>
                                    </div>
                                    <div class="color-quality-pro">
                                        <div class="color-quality-details">
                                            <h4 style="color: white;">Quantité Stock :</h4>
                                            <div class="quantity">
                                                <div class="pro-quantity-changer">
                                                    <h4 style="color: white;"><?php echo $liste->qte; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>

                                        <div class="clear"></div>
                                    </div>
                                    <div class="single-pro-cn">
                                        <h4 style="color: white;">DESCRIPTION :</h4>
                                        <p><?php echo $liste->descr; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single pro tab End-->
    <!-- Single pro tab review Start-->

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
<!-- tab JS
    ============================================ -->
<script src="js/tab.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
</body>

</html>
