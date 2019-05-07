<?PHP

include_once "../core/locationC.php";
$locationC1=new locationC();

if (isset($_GET["cin"])){

	$locationC1->SupprimerLocation($_GET["cin"]);

}
header('Location:locationBack.php');
?>
