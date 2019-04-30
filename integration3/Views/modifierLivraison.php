<HTML>
<head>
</head>
<body>
<?PHP
include "../Entities/livraison.php";
include "../Core/livraisonC.php";
if (isset($_GET['id'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->chercherLivraison($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$destination=$row['destination'];
		$client=$row['client'];
		$livreur=$row['livreur'];
		$localisation=$row['localisation'];
?>
<form method="POST">
<table>
<caption>Modifier Livraison</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Client</td>
<td><input type="text" name="client" value="<?PHP echo $client ?>"></td>
</tr>
<tr>
<td>Destination</td>
<td><input type="text" name="destination" value="<?PHP echo $destination ?>"></td>
</tr>
<tr>
<td>Livreur</td>
<td><input type="number" name="livreur" value="<?PHP echo $livreur ?>"></td>
</tr>
<tr>
<td>Localisation</td>
<td><input type="text" name="localisation" value="<?PHP echo $localisation ?>"></td>
</tr>
<tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new Livraison($_POST['id'],$_POST['destination'],$_POST['client'],$_POST['livreur'],$_POST['localisation']);
	$livraisonC->modifierLivraison($livraison,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location:LivraisonBACK.php');
}
?>
</body>
</HTML>
