<?php 
include '../core/membreC.php';
$test = $_GET['cin'];
$m=new MembreC;
$m->supprimerUser($test);
header( 'Location: Users.php');
?>