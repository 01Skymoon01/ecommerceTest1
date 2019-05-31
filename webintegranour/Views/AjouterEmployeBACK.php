<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ajout Livreur</title>
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
    <?php require_once 'header.php' ?>
    <script type="text/javascript">
function validation()
{
     ch="abcdefghijklmnopqrstuvwxyzçéè àABCDEFGHIJKLMNOPQRSTUVWXYZ"
    tr=true;
    trr=true
    x=myForm.nom.value;
    y=myForm.prenom.value;
    for(i=0;i<myForm.nom.value.length;i++)
        {
            if(ch.indexOf(x.charAt(i))==-1)
                {
                    tr=false
                }
        }
    for(i=0;i<myForm.prenom.value.length;i++)
        {
            if(ch.indexOf(y.charAt(i))==-1)
                {
                    trr=false
                }
        }

   if(myForm.cin.value.length != 8 || isNaN(myForm.cin.value)  )
       {
        alert("Verifier CIN");
           return false;
       }
    else if(myForm.nom.value == ""|| tr==false )
        {
            alert("Verifier nom");
            return false;
        }
    else if(myForm.prenom.value == ""|| trr==false)
        {
            alert("verifier prenom");
            return false;
        }
    else if(myForm.telephonne.value.length != 8|| isNaN(myForm.telephonne.value) )
        {
            alert("verifier telephonne");
            return false;
        }
    else if( myForm.email.value == ""|| myForm.email.value.indexOf('@')==-1 || (myForm.email.value.lastIndexOf('.') != (myForm.email.value.length - 3) && myForm.email.value.lastIndexOf('.') != (myForm.email.value.length - 4)  ))
        {
            alert("verifier email");
            return false;
        }
    else if(myForm.zone.value == "")
        {
            alert("verifier zone");
            return false;
        }
    else
    {
        return true;
    }
}
</script>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
          <!-- Mobile Menu end -->


        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30" style="margin-left:20px; margin-top:20px;">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area" style="margin-left:20px;">
                <div class="container-fluid">

                    <div class="row" style="margin-left:200px;">
                        <fieldset style="margin-top:30px;border: #95C8D8;border-width: 5px;border-style: dashed;padding: 10px;">
                            <legend style="color: white; text-align: center;font-stretch: expanded"><h2><i class="icon nalika-edit" aria-hidden="true">

                                    </i>Ajouter Livreur</h2>
                            </legend>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="employeBACK.php"><i class="icon nalika-edit" aria-hidden="true"></i> Livreur</a></li>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
<form method="POST" action="ajoutLivreur.php" name="myForm" onsubmit="return validation()">
<!--
<table style="margin-left: 30%;" style="padding-left: 15px;" >

<tr >
<td style="color: white; font-weight: bold; margin-right: 50px;">CIN</td>
<td><input type="number" class="form-control" name="cin"></td>
</tr></br>

<tr>
<td style="color: white; font-weight: bold; ">Nom</td>
<td><input type="text" name="nom" class="form-control"></td>
</tr>
<tr>
<td style="color: white; font-weight: bold; ">Prenom</td>
<td><input type="text" name="prenom" class="form-control"></td>
</tr>
<tr>
<td style="color: white; font-weight: bold; ">Telephone</td>
<td><input type="number" name="telephone" class="form-control"></td>
</tr>
<tr>
<td style="color: white; font-weight: bold; ">Email</td>
<td><input type="text" name="email" class="form-control"></td>
</tr>
<tr>
<td style="color: white; font-weight: bold; ">Zone</td>
<td><input type="text" name="zone" class="form-control"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>
-->
<div class="product-tab-list tab-pane fade active in" id="description" >
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="margin-left: 20%;">
                                                <div class="review-content-section">

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >

<center><label style="color: white; font-weight: bold; margin-right: 50px; width:2px;" >CIN</label></center>
<input type="number" class="form-control" name="cin">
    </div>
</div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >
<center><label style="color: white; font-weight: bold; ">Email</label></center>
<input type="text" name="email" class="form-control">
</div></div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >
<center><label style="color: white; font-weight: bold; ">Nom</label></center>
<input type="text" name="nom" class="form-control" >
</div></div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >
<center><label style="color: white; font-weight: bold; ">Prenom</label></center>
<input type="text" name="prenom" class="form-control">
</div></div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >
<center><label style="color: white; font-weight: bold; ">Telephone</label></center>
<input type="number" name="telephonne" class="form-control">
</div></div>



 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt"  >
<center><label style="color: white; font-weight: bold; ">Zone</label></center>
<input type="text" name="zone" class="form-control">
</div></div>

</div></div></div></div>

                                            </div>
                                        </div></br></br>
                                        <div class="row" style="margin-right: 9%;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" name="ajouter" value="Ajouter" class="btn btn-sm waves-effect" style="width: 100px; background-color: #24CAA1;" ><i class="fa fa-check-circle fa-2x"></i></button>
                                              </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                    </fieldset>
                        </div>
                    </div>
                </div>
</form>
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
