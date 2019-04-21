<?PHP
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";
$CommandeC1=new CommandeC();

if (isset($_GET["cin"])){

	$CommandeC1->ModifierEtatCommande($_GET["cin"],$_GET["etat"]);

}
header('Location:CommandeList.php');
?>
