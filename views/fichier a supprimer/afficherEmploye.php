<?PHP
include "paniers.class.C.php";
$panier1C=new panierC();
$liste=$panier1C->afficherPanier();


?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>

</tr>

<?PHP
foreach($liste as $row){
	?>
	<tr>
	<td><?PHP echo $row['desc_pp']; ?></td>
	<td><?PHP echo $row['price']; ?></td>


	</tr>
	<?PHP
}
?>
</table>
