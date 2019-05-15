<?php
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";

$CommandeC1=new CommandeC();


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

<?php require 'header.php' ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart() {
var data = google.visualization.arrayToDataTable([
['Jour', 'Revenue'],
<?php

$listeCommandeStat=$CommandeC1->RevenueParJoursGraph();

foreach($listeCommandeStat as $row){
  echo "['".$row["datec"]."',".$row["revenue"]."],";
}

 ?>

]);

var options = {
title: '',
hAxis: {title: 'Par Jour',  titleTextStyle: {color: '#333'}},
vAxis: {minValue: 0}
};

var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
chart.draw(data, options);

var data2 = google.visualization.arrayToDataTable([
['Annee', 'Revenue'],
<?php

$listeCommandeStat=$CommandeC1->RevenueParAnneeGraph();

foreach($listeCommandeStat as $row){
  echo "['".$row["datec"]."',".$row["revenue"]."],";
}


 ?>

]);

var options2 = {
title: '',
hAxis: {title: 'Par Annee',  titleTextStyle: {color: '#333'}},
vAxis: {minValue: 0}
};

var chart = new google.visualization.AreaChart(document.getElementById('chart_div3'));
chart.draw(data2, options2);



}


</script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Categorie', 'Revenue'],
    <?php

    $listeCommandeStat=$CommandeC1->RevenueInterieurGraph();

    foreach($listeCommandeStat as $row){
      echo "['Interieur',".$row["c"]."],";
    }


     ?>
     <?php

     $listeCommandeStat=$CommandeC1->RevenueExterieurGraph();

     foreach($listeCommandeStat as $row){
       echo "['Exterieur',".$row["c"]."],";
     }


      ?>
  ]);

  var options = {
    title: 'Revenue Par Categorie'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
</script>

        <div class="breadcome-list"  style="background-color:white;color:black; margin-left:100px; margin-right:100px;">

                                                  <div style="flex: auto;">
                                                    <table>
                                                      <th></th>
                                                      <tr>
                                                        <td>  <div id="piechart" style="width: 500px; height: 500px;"></div></td>
                                                        <td> <div id="chart_div" style="width: 590px; height: 500px;" ></div></td>
                                                      </tr>
                                                    </table>


                                                  </div>
                                    </div>

                                                                <div class="breadcome-list"  style="background-color:white;color:black; margin-left:100px; margin-right:100px;">
                                                                                                <div class="row" >
                                                                 <div id="chart_div3" style="width: 1050px; height: 500px;" ></div>
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

      <script type="text/javascript" src="app.js" ></script>
</body>

</html>
