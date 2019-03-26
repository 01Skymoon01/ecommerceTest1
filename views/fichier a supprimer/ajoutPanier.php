<?php
header("Content-Type: text/plain");
include "paniers.class.C.php";
include "paniers.class.php";


if (isset($_POST['desc']) and isset($_POST['price']))
{
  $panier1=new panier($_POST['desc'],$_POST['price']);
  $desc=$panier1->getDesc();
  $price=$panier1->getPrice();
  echo $desc;
  echo $price;
$panier1C=new panierC();
$panier1C->ajouterAuPanier($panier1);
}
?>
