<?php 
include '../core/membreC.php';
include '../core/favorisC.php';


//require_once "../FrontOffice/afficherCommentaires.php";


$test = $_GET['cin'];
$test2= $_GET['prenom'];



$favorisC=new favorisC;
$m=new MembreC;
$favorisC->supprimerFavorisClient($test);
$favorisC->supprimerCommClient($test2);



$m->supprimerUser($test);

$test=array();

header( 'Location: Users.php');


?>