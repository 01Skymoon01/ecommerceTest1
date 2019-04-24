<?PHP

session_start();

include "../core/membreC.php";

if ( isset($_POST['mdp']) ){

			$mdp=md5($_POST['mdp']);

			//$date_naissance=$_POST['date_naissance'];

			//$num_tel=$_POST['num_tel'];

			$cin=$_SESSION['cin'];



$Membre = new MembreC();
$Membre->modifierMdp($mdp,$cin);
header('Location: product.php');

}
else
{
	echo "Verifier les champs";
}

/******************************************************MODIFIER TEL***********************************************/

if ( isset($_POST['num_tel']) ){

			$num_tel=$_POST['num_tel'];

			//$date_naissance=$_POST['date_naissance'];

			//$num_tel=$_POST['num_tel'];

			$cin=$_SESSION['cin'];



$Membre = new MembreC();
$Membre->modifierNum($num_tel,$cin);
header('Location: product.php');

}
else
{
	echo "Verifier les champs";
}

?>
