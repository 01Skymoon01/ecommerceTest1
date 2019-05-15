<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Edit | Nalika - Material Admin Template</title>
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

          <script type="text/javascript">
          function validation()
          {
              ch="abcdefghijklmnopqrstuvwxyzçéè àABCDEFGHIJKLMNOPQRSTUVWXYZ"
              tr=true;

              x=myForm.localisation.value;


              for(i=0;i<myForm.localisation.value.length;i++)
                  {
                      if(ch.indexOf(x.charAt(i))==-1)
                          {
                              tr=false
                          }
                  }
             if(myForm.id.value == ""|| isNaN(myForm.id.value))
                 {
                  alert("Verifier ID");
                     return false;
                 }
              else if( myForm.destination.value == "" )
                  {
                      alert("Verifier Destination");
                      return false;
                  }
              else if (myForm.client.value == ""|| isNaN(myForm.client.value) )
                       {
                       alert("Verifier ID commandes");
                           return false;
                       }
              else if(myForm.livreur.value == ""|| isNaN(myForm.livreur.value) || myForm.cin.value.length != 8)
                  {
                      alert("Verifier ID LIVERUR");
                      return false;
                  }
              else if (myForm.localisation.value == ""|| tr==false)
                  {
                      alert("Verifier Localisation");
                      return false;
                  }
              else
                  {
                      return true;
                  }
          }
      </script>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30" style="margin-left:20px; margin-top:20px;">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area" >
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Ajouter Livraison</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
<form method="POST" action="ajoutLivraison.php" name="myForm" onsubmit="return validation()" >

<!--
<table>
<tr>
<td style="color: white">ID</td>
<td><input type="number" name="id"></td>
</tr>
<tr>
<td style="color: white">Destination</td>
<td><input type="text" name="destination"></td>
</tr>
<tr>
<td style="color: white">Commande</td>
<td><input type="number" name="client"></td>
</tr>
<tr>
<td style="color: white">Livreur</td>
<td><input type="number" name="livreur"></td>
</tr>
<tr>
<td style="color: white">Ville Destination</td>
<td><input type="text" name="localisation"></td>
</tr>
<tr>
</tr>
</table>
-->





<div class="product-tab-list tab-pane fade active in" id="description" >
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="margin-left: 20%;">
                                                <div class="review-content-section">

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >

<center><label style="color: white; font-weight: bold; margin-right: 50px; width:2px;">ID</label></center>
<input type="number" class="form-control" name="id">

</div>
</div>


 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >

<center><label style="color: white; font-weight: bold; ">Destination</label></center>
<input type="text" name="destination" class="form-control">
</div></div>



 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >

<center><label style="color: white; font-weight: bold; ">Commande</label></center>
<td><input type="number" name="client" class="form-control"></td>
</div></div>



 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >

<center><label style="color: white; font-weight: bold; ">Livreur</label></center>
<input type="number" name="livreur" class="form-control">

</div></div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left:25%;" >

<div class="input-group mg-b-pro-edt" >

<center><label style="color: white; font-weight: bold; ">Ville Destination</label></center>
<input type="text" name="localisation" class="form-control">
</div></div>


</div></div></div></div>

                                            </div>
                                        </div></br></br>
                                        <div class="row" style="margin-right: 9%;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                  <input type="submit" name="ajouter" value="Ajouter" class="btn btn-custon-rounded-four btn-danger" style="width: 100px; margin-left:-10%;">
                                              </div>
                                              <div class="text-center custom-pro-edt-ds">
                                                    <a href="employeBACK.php" style="margin-left:105%;"><img src="img/retour.png" style="height: 40px; width: 40px;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




  </form>                                      </div>
                                    </div>

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
