<?PHP

include_once "../Core/locationC.php";
$locationC1=new locationC();

if (isset($_GET["cin"])){

	$locationC1->ModifierEtatLocation($_GET["cin"],$_GET["etat"]);

}
header('Location:locationBack.php');
?>
