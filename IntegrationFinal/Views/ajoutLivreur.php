<?PHP
include_once "../Entities/employe.php";
include_once "../Core/employeC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['telephonne']) and isset($_POST['email']) and isset($_POST['zone']))
{
$livreur1=new Livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['telephonne'],$_POST['email'],$_POST['zone']);
$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: employeBACK.php');
}
    else
    {
	echo "vérifier les champs";
}
?>
