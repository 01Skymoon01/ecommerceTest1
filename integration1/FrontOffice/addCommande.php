<?php
include "../core/GestionPanier/paniers.class.c.php";
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";
$panier= new panier();
if(isset($_SESSION['cin']))
{

$listeC1=array();
$listeC=array();
if (isset($_POST["panier"]["qte"])) {
//var_dump($_POST);
 $totalPrix=$panier->recalculer($_POST["panier"]["qte"]);

 $nbProduit=$panier->Total_nb($_POST["panier"]["qte"]);
 $totalQTE=(int)$panier->Total_QTE($_POST["panier"]["qte"]) ;
 $IDClient=(int)$_SESSION['cin'];

  $NomProduit= $panier->listeNom($_POST["panier"]["qte"]);
  $IdProduit= $panier->listeID($_POST["panier"]["qte"]);
  $PrixProduits= $panier->listePrix($_POST["panier"]["qte"]);

 $QTEProduits= $panier->listeQTE($_POST["panier"]["qte"]);



$commande1=new commande($nbProduit,$totalPrix,$IDClient);
$commande1C=new commandeC();
$commande1C->ajouterCommande($commande1);
$listeC=$commande1C->afficherCommandeEnCours($commande1);

//$listeC=$commande1C->afficherCommandeEnCours($commande1);
$i=0;
foreach ($listeC as $key => $value) {
  // code...

  if($i==0)
  $id_commande = (int)$value;

  if($i==4)
  $id_client =$value;

  if($i==1)
  $date_commande =$value;

  if($i==2)
  $totalPrix_commande =$value;

  if($i==3)
  $nbProduit_commande =$value;

  $i++;
}

$listeC1=array($id_commande,$date_commande,$nbProduit_commande,$id_client,$totalPrix_commande);

$commandeD1=new commandeDetails($id_commande,$NomProduit,$IdProduit,$PrixProduits,$QTEProduits);

$commande1C->ajouterDetailsCommande($commandeD1,(int)$nbProduit_commande);



$panier->addCommandeVirtuelle($listeC1);
var_dump($listeC1);
header('location:commande.php');
}
}
else {
  $_SESSION["page"]=array();
  $_SESSION["page"]="addCommande.php"; 
  header('location:signin.php');
}
//header('location:commande.php');

 ?>
