<?php
include "../core/GestionPanier/paniers.class.c.php";
include "../entities/location.php";
include "../core/locationC.php";
$panier= new panier();
if(isset($_SESSION['cin']))
{
  
  $id=(int)$_SESSION['cin'];
  $location1= new location($id,$_GET["name"],$_GET["price"],$_GET["qte"],$_GET["datedeb"],$_GET["datefin"]);

$location1C= new locationC();
$location1C->ajouterlocationProc($location1);
header('location:LocationValide.php');
}
else {
  $_SESSION["page"]=array();
  $_SESSION["page"]="addLouer.php";
  header('location:signin.php');
}
//header('location:LocationValide.php');

 ?>
