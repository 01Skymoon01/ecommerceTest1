<!doctype html>
<html class="no-js" lang="en">
<?php include "../core/ReclamationC.php";
$reclamationC = new ReclamationC();
$dd= date_create()->format('Y-m-d');
$listereclamation = $reclamationC->afficherReclamations();
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
  <div class="section-admin container-fluid res-mg-t-15" style="margin-top:10px;">
      <div class="row admin text-center" style="margin-top:50px;">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="admin-content analysis-progrebar-ctn" style="background-color:white;color:black;"><div class="stats-icon pull-right">
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                          </div>
                          <h4 class="text-left text-uppercase" style="color:black;"><b>Livraison non reçu</b></h4>
                          <div class="row vertical-center-box vertical-center-box-tablet">
                              <div class="col-xs-9 cus-gh-hd-pro">
                                  <h2 class="text-right no-margin" style="color:#3B6B9A;font-size:20px;"><?php $ClientFidele=$reclamationC->NBRLivraisonNonRecu();
                                  {
                                    foreach($ClientFidele as $row){
                                      echo $row["nbr"];
                                    }
                                  }?></h2>
                              </div>
                          </div>
                          <div class="progress progress-mini">
                              <div style="width: 100%;" class="progress-bar bg-blue"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                      <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                        <div class="stats-icon pull-right">
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                          </div>
                          <h4 class="text-left text-uppercase" style="color:black;"><b>Livraison non coforme</b></h4>
                          <div class="row vertical-center-box vertical-center-box-tablet">
                              <div class="col-xs-9 cus-gh-hd-pro">
                                  <h2 class="text-right no-margin" style="color:#3B6B9A;font-size:20px; "><?php $ClientFidele=$reclamationC->NBRLivraison_non_coforme();
                                  {
                                    foreach($ClientFidele as $row){
                                      echo $row["nbr"];
                                    }
                                  }?></h2>
                              </div>
                          </div>
                          <div class="progress progress-mini">
                              <div style="width: 100%;" class="progress-bar bg-blue"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                      <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                        <div class="stats-icon pull-right">
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                          </div>
                          <h4 class="text-left text-uppercase" style="color:black;"><b>R et M sous garantie</b></h4>
                          <div class="row vertical-center-box vertical-center-box-tablet">
                              <div class="col-xs-9 cus-gh-hd-pro">
                                  <h2 class="text-right no-margin" style="color:#3B6B9A;font-size:20px; "><?php $ClientFidele=$reclamationC->NBRRetM_sousGrantie();
                                  {
                                    foreach($ClientFidele as $row){
                                      echo $row["nbr"];
                                    }
                                  }?></h2>
                              </div>
                          </div>
                          <div class="progress progress-mini">
                              <div style="width: 100%;" class="progress-bar bg-blue"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                      <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                        <div class="stats-icon pull-right">
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                          </div>
                          <h4 class="text-left text-uppercase" style="color:black;"><b>Autre</b></h4>
                          <div class="row vertical-center-box vertical-center-box-tablet">
                              <div class="col-xs-9 cus-gh-hd-pro">
                                  <h2 class="text-right no-margin" style="color:#3B6B9A;font-size:20px; "><?php $ClientFidele=$reclamationC->NBRAutre();
                                  {
                                    foreach($ClientFidele as $row){
                                      echo $row["nbr"];
                                    }
                                  }?></h2>
                              </div>
                          </div>
                          <div class="progress progress-mini">
                              <div style="width: 100%;" class="progress-bar bg-blue"></div>
                          </div>
                      </div>
                  </div>



              </div>
          </div>
      </div>
  </div>
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      client=tr[i].getElementsByTagName("td")[5];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        }
          else  if (client) {
        txtValue = client.textContent || client.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
      }
    }
  }

  </script>
        <div class="product-status mg-b-30" style="margin-top:10px">
            <div class="container-fluid" style="margin-top:20px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des reclamations</h4>
                            <form action="reclamationBACK.php" method="GET">
                              <div style="display: flex;margin-bottom:10px;">
                                <div class="input-group mb-3" >
                                  <div class="breadcome-heading">
                                      <form role="search" class="">
                                          <input id="myInput" style="color:white;"  type="text" placeholder="Search..."  onkeyup="myFunction()" class="form-control">
                                      </form>
                                  </div></div>


                                </div>
                          </form>
                            <table id="myTable">
                                <tr>
                                    <th>Date Depot Reclamation</th>
                                    <th>Objet Reclamation</th>
                                    <th>Details Reclamation</th>
                                    <th>Etat</th>
                                    <th>Nom user</th>
                                    <th>Prenom user</th>

                                </tr>


                                <?PHP

                                if (isset($_GET["search"]) && $_GET["search"]!=""){

                                //  var_dump($_GET["cin"]);

                                  $listereclamation=$reclamationC->RechercheReclamationC($_GET["search"]);

                                }
                                foreach($listereclamation as $row){
                                if ($dd >= $row['NOW_R']) {
                                 if($row['ETAT'] == 'en attente'){

                                    ?>
                                                                  <tr style="background-color:#3B6B9A;">

                                  <?PHP } else if($row['ETAT'] == "Traitee") {
                                     ?>

                                                                  <tr style="background-color:#365D84;">
                                      <?php }      ?>



                                        <td><?PHP echo $row['NOW_R']; ?></td>
                                        <td><?PHP echo $row['OBJET_R']; ?></td>
                                        <td><?PHP echo $row['DETAILS_R']; ?></td>
                                        <td><?PHP echo $row['ETAT']; ?></td>
                                        <td><?php echo $row['nom']?></td>
                                        <td><?php echo $row['prenom']?></td>

                                        <td> <form method="post" action="traiterR.php">
                                                <button class="btn btn-sm" style="background-color: #85ffc7;"><i class="fa fa-check-circle"></i></button>
                                                <input type="hidden" value="<?PHP echo $row['ID_R']; ?>" name="ID_R">
                                            </form>
                                        </td>
                                        <!-- <button data-toggle="tooltip" title="Trash" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>-->
                                        <!-- <a href="deletedemande.php?sup=<?php //echo $row['ID_D'];?>" class="fa fa-trash-o"></a>-->

                                        <td> <form method="post" action="deletereclamation.php">
                                                <button data-toggle="tooltip" class="btn btn-sm" title="Trash" style="background-color: #fe5f55" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                                <!-- <input type="submit" name="supprimer" class="nalika-delete-button" value="Supprimer">-->
                                                <input type="hidden" value="<?PHP echo $row['ID_R']; ?>" name="ID_R">
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
