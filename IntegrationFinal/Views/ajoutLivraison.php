<?PHP
include "../Entities/livraison.php";
include "../Core/livraisonC.php";

if (isset($_POST['id'])and isset($_POST['destination']) and isset($_POST['client']) and isset($_POST['livreur']) and isset($_POST['localisation']))
{
$livraison1=new Livraison($_POST['id'],$_POST['destination'],$_POST['client'],$_POST['livreur'],$_POST['localisation']);
$livraison1C=new LivraisonC();
    $livreurC=new LivreurC();
    $result=$livreurC->chercherLivreur($_POST['livreur']);
    foreach($result as $row){
    $m=$row['email'] ;
    }

    if($m!=""){
$livraison1C->ajouterLivraison($livraison1);
        header('Location: LivraisonBACK.php');
    } else echo"Livreur introuvable Ajouter un livreur depuis la liste des livreurs ";

}
    else
    {
	echo "vérifier les champs";
}
?>
