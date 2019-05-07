<?php
include "../Entities/ProduitInt.php";
include "../Core/ProduitIntC.php";


if (isset($_POST['nomprod']/*,$_POST['nprod']*/,$_POST['PrixProd'],$_POST['QteProd'],$_POST['DescProd'],$_POST['CatProd'])){
    $produit1=new ProduitInt(
        $_POST['nomprod']/*,$_POST['nprod']*/,$_POST['PrixProd'],$_POST['QteProd'],$_POST['DescProd'],$_POST['CatProd']
    );
    //Partie2
    /*
    var_dump($produit1);
    }
    */
    //Partie3
    $Produit1C=new ProduitIntC();
    $Produit1C->ajouterProd($produit1);
    header('Location: afficher_produits.php');

}else{
    echo $_POST['nomprod'];
    //echo $_POST['nprod'];
    echo $_POST['PrixProd'];
    echo $_POST['QteProd'];
    echo $_POST['DescProd'];
    echo $_POST['CatProd'];
	echo "vérifier les champs";
}
//*/

?>