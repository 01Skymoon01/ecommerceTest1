
<?PHP include "../Core/ProduitIntC.php";
//$produit=new ProduitInt('chaise',152,150,125,'chaise comfortable',1);
$produit1C=new ProduitIntC();
$liste=$produit1C->MaxStock();
//var_dump($listeEmployes->fetchAll());
$liste2=$produit1C->MinStock();
$liste3=$produit1C->RuptureStock();
$liste4=$produit1C->SousStock();
$liste5=$produit1C->Plus_cher();
$tot = $produit1C->EstimationTotVente();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Statistiques | Gestion de Stock</title>
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
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp">
                                     
                                        <div class="breadcomb-ctn">
                                            <h2>GeoConcept</h2>
                                            <p>Statistiques : <span class="bread-ntd"></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="widgets-programs-area mg-t-15">

            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($liste as $max): ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Les Plus en Stock.</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="font-bold text-success"><strong><?php echo $max->nom; ?></strong></h1>
                                    <small>
                                        <strong><?php echo $max->qte; ?></strong> unités.
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach ?>
                    <?php foreach ($liste2 as $min): ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="hpanel responsive-mg-b-30">
                                <div class="panel-body">
                                    <div class="stats-title pull-left">
                                        <h4>Le Moins en Stock.</h4>
                                    </div>
                                    <div class="stats-icon pull-right">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </div>
                                    <div class="m-t-xl">
                                        <h1 class="text-warning"><?php echo $min->nom; ?></h1>
                                        <small>
                                            <strong><?php echo $min->qte; ?></strong> unités.
                                        </small>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php endforeach ?>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-box" style="">
                                    <h2 class="m-b-xs">Le Plus Cher :</h2>
                                    <h1 class="font-bold text-capitalize"><strong><?php echo $liste[0]->nom ?></strong></h1>
                                    <div class="m icon-box">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Valeur totale :</h2>
                                    <h1 class="text-success"><strong><?php echo $tot ?></strong> TND</h1>
                                    <div class="m icon-box">
                                        <i class="fa fa-dollar" aria-hidden="true"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- income order visit user Start -->
                <br>
        <div class="income-order-visit-user-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel hbgyellow">
                            <div class="panel-body" style="background-color: #e0a933;">
                                <div class="stats-title pull-left">
                                    <h4>En Sous Stock.</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-big font-light"><?php echo $liste4; ?><small> unités.</small></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel hbgred">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Rupture de Stock.</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-big font-light"><?php echo $liste3; ?><small> unités.</small></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- income order visit user End -->



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
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/chart/peity-active.js"></script>
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