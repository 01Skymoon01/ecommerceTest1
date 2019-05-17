
<?PHP
include_once "../config.php";
require_once '../core/GestionPanier/paniers.class.c.php';
$db = config::getConnexion();
$panier= new panier();


if (isset($_SESSION['cin']) and $_SESSION['cin'] > 0 )
{
    $getcin=$_SESSION['cin'];
    $bdd = config::getConnexion();
    $requser=$bdd->prepare('SELECT * FROM membres WHERE cin = ?');
    $requser->execute(array($getcin));
    $userinfo = $requser->fetch();
}


include_once '../core/membreC.php';



if(isset($_POST['SignIn'])){
    $membre = new MembreC;

    $email='';
    $motdepasse='';


    if((isset($_POST['email']))&&(isset($_POST['password']))){
        $email_membre= $_POST['email'];
        $motdepasse_membre=$_POST['password'];
        $motdepassecrypte=md5($motdepasse_membre);

        $tab = $membre->connexion($email_membre,$motdepassecrypte);
                if (is_array($tab) || is_object($tab))
                {
                    foreach($tab as $row)
                    {
                        $_SESSION['email']=$email=$row['email'];
                        $_SESSION['mdp']=$motdepasse=$row['mdp'];
                        $mdp=md5($motdepasse);
                        $_SESSION['prenom']=$prenom=$row['prenom'];
                        $_SESSION['nom']=$nom=$row['nom'];
                        $_SESSION['cin']=$cin=$row['cin'];
                        $_SESSION['sexe']=$sexe=$row['sexe'];
                        $_SESSION['num_tel']=$telephone=$row['num_tel'];
                        $_SESSION['date_naissance']=$datedenaissance=$row['date_naissance'];
                    }
                }
            if(($email_membre==$email)&&($motdepassecrypte==$motdepasse))
            {
                header('Location: product.php');
            }
            else{
                echo "ERREUR: Vérifier votre email et mot de passe!!";
            }
        }
}

if(!empty($_SESSION['cin'])) {
header('Location: product.php');
}
?>
<head>
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Flexslider  -->
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/modal.css">
<!--<link rel="stylesheet" href="../Views/css/font-awesome.min.css">-->
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
<!-- Owl Carousel  -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<!-- Theme style  -->
<link rel="stylesheet" href="css/style.css">
<!--fontawesome -->

</head>

<body >
  <div id="page">
  <nav class="fh5co-nav" role="navigation">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-xs-2">
                  <div id="fh5co-logo"><a href="index.php"><!--img src="images/logosn.png" alt="" width="35" style="margin: -4px 5px 0px 10px;" /-->GeoConcept.</a></div>
              </div>
              <div class="col-md-6 col-xs-6 text-center menu-1" data-animate-effect="fadeIn">
                  <div class=" btn btn-group">
                      <ul style="margin: auto">
                          <li class="has-dropdown">
                              <a href="product.php" class="" style="font-size: x-large;"><i class="fa fa-couch"></i></a>
                              <ul class="dropdown">
                                  <li><a href="product.php">Produit Intérieur</a></li>
                              </ul>
                          </li>
                          <li class="has-dropdown">
                              <a href="product2.php" class="" style="font-size: x-large;margin-left: 10px;"><i class="fa fa-umbrella-beach"></i></a>
                              <ul class="dropdown">
                                  <li><a href="product2.php">Produit Extérieur</a></li>
                              </ul>
                          </li>

                          <li class="has-dropdown">
                              <a href="Louer.php" class="" style="font-size: x-large;margin-left: 10px;"><i class="fa fa-truck-loading"></i></a>
                              <ul class="dropdown">
                                  <li><a href="Louer.php">Location</a></li>

                              </ul>
                          </li>
                          <li class="has-dropdown">
                              <a href="FAQ.php" class="" style="font-size: x-large;margin-left: 10px;"><i class="fa fa-question-circle fa-spin"></i></a>
                              <ul class="dropdown">
                                  <li><a href="FAQ.php">Questions</a></li>

                              </ul>
                          </li>
                          <?php if(isset($_SESSION['cin'])){ ?>
                              <li class="has-dropdown">
                                  <a href="contact.php" style="font-size: x-large;"><i class="fa fa-address-book"></i></a>
                                  <ul class="dropdown">
                                      <li><a href="RDV.php">Rendez-vous</a></li>
                                      <li><a href="demande.php">Demandes</a></li>
                                      <li><a href="contact.php">Reclamer</a></li>

                                  </ul>

                              </li>
                              <li class="has-dropdown">
                                  <a href="addfavoris.php" style="font-size: x-large;"><i class="fa fa-star fa-spin"></i></a>

                              </li>
                              <li class="has-dropdown">
                                  <a href="afficherCommentaires.php" style="font-size: x-large;"><i class="fa fa-comment"></i></a>

                              </li>

                          <?php } ?>

                          <?php if(!isset($_SESSION['cin'])){ ?>
                              <li><a href="signin.php" class="" style="font-size: x-large;margin-left: 10px"><i class="fa fa-sign-in-alt"></i></a></li>
                          <?php } ?>

                      </ul>
                  </div>

                  <script src="../Views/js/vendor/jquery-1.12.4.min.js"></script>
              </div>
              <script>
                  $('.spinner').hover(function() {
                      $(this).addClass('fa-spin');
                  });
                  $('.pulseer').hover(function() {
                      $(this).addClass('fa-pulse');
                  });
              </script>


          </div>

      </div>
  </nav>
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <script defer src="fontawesome/js/all.js"></script>

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>


  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="store.js" async></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

      <link href="https://fontawesome.com/icons?d=gallery" rel="stylesheet" media="all">
      <!-- Font special for pages-->
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

      <!-- Vendor CSS-->
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

      <!-- Main CSS-->
      <link href="css/main.css" rel="stylesheet" media="all">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script>

  function myFunction() {
    var x = document.getElementById("myInput");
    var eye = document.getElementById("eye");
    if (x.type === "password") {
      x.type = "text";
      eye.toggleClass("fa fa-eye");
    } else {
      x.type = "password";
    }
  }

  function myFunction2() {
    var x = document.getElementById("myInput");


      x.type = "password";


  }

      </script>

      <style>
     .fa{
      position: absolute;
      left:230px;
      top:10px;
      font-size: 18px;
      cursor: pointer;
      color: #999;
     }
     .fa.active{
      color: dodgerblue;
     }


      </style>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
              <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Connexion </h2>



                    <form method="POST" action="">

                        <div class="input-group" style="width:80%;">
                             <input class="input--style-1" type="email" placeholder="ADRESSE EMAIL" name="email" required>
                        </div>

                        <div class="input-group" style="width:80%;">
                             <input class="input--style-1" type="password" placeholder="MOT DE PASSE" name="password" id="myInput" required>
                             <input class="fa fa-eye-slash" type="checkbox" onmousedown="myFunction()" onmouseup="myFunction2()" style="margin-left: 90%; margin-top: -30px;" id="eye">

                        </div>


                        <div class="forgot"><a href="recuperation.php">Mot de passe oublié?</a></div></br>


                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="SignIn">Connexion</button>
                        </div>

                        <div class="membre"><a href="signup.php" class="deja2">Inscrivez-vous?</a></div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <?php require "footer.php" ?>
</>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
