<?PHP
include_once "../Core/employeC.php";
$livreurC=new LivreurC();
if (isset($_POST["cin"])){
	$livreurC->supprimerLivreur($_POST["cin"]);
	header('Location: employeBACK.php');
}

?>
