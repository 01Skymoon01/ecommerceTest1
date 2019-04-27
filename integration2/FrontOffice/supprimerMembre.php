<?PHP

include "../core/membreC.php";
session_start();


$membreC=new MembreC();
if (isset($_SESSION["cin"])){
	$membreC->supprimerMembre($_SESSION["cin"]);
	header('Location: index.php');
}

?>