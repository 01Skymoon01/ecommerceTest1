<?PHP
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";
$CommandeC1=new CommandeC();
$json = array('error' => true );
if (isset($_GET["cin"])){

//  var_dump($_GET["cin"]);

	$CommandeC1->SupprimerCommandeSesDetails($_GET["cin"]);
  $CommandeC1->SupprimerCommande($_GET["cin"]);

}


header('Location:CommandeList.php');
?>
