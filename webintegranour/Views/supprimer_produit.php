<?PHP
include "../Core/ProduitIntC.php";
$produitC=new ProduitIntC();
if (isset($_POST["num"])){
    $produitC->supprimerProduit($_POST["num"]);
    header('Location: afficher_produits.php');
}

?>