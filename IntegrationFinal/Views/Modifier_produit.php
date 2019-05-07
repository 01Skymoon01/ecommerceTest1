<HTML>
<head>
</head>
<body>
<?PHP
include "../Entities/ProduitInt.php";
include "../Core/ProduitIntC.php";
$produitC=new ProduitIntC();
if (isset($_GET['nprod'])){
    $result=$produitC->recupererProduit($_GET['nprod']);
    foreach($result as $row){
        $num=$row['num'];
        $nom=$row['nom'];
        $prix=$row['prix'];
        $qte=$row['qte'];
        $desc=$row['descr'];
        $cat=$row['cat'];
        ?>
        <form method="POST">
            <table>
                <caption>Modifier Produit</caption>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
                </tr>
                <tr>
                    <td>Num</td>
                    <td><input type="text" name="num" value="<?PHP echo $num ?>"></td>
                </tr>
                <tr>
                    <td>Prix</td>
                    <td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
                </tr>
                <tr>
                    <td>Qte</td>
                    <td><input type="number" name="qte" value="<?PHP echo $qte ?>"></td>
                </tr>
                <tr>
                    <td>Descrition</td>
                    <td><input type="text" name="descr" value="<?PHP echo $desc ?>"></td>
                </tr>
                <tr>
                    <td>Categorie</td>
                    <td><input type="text" name="cat" value="<?PHP echo $cat ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="modifier" value="modifier"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['num'];?>"></td>
                </tr>
            </table>
        </form>
        <?PHP
    }
}
if (isset($_POST['sauvegarder'])){
    $produit=new Produitint($_POST['nomprod']/*,$_POST['nprod']*/,$_POST['PrixProd'],$_POST['QteProd'],$_POST['DescProd'],$_POST['CatProd']);
    $produitC->modifier_produit($produit,$_POST['nprod']);
    echo $_POST['nprod'];
    echo $_POST['nomprod'];
    echo $_POST['PrixProd'];
    echo $_POST['QteProd'];
    echo $_POST['DescProd'];
    echo $_POST['CatProd'];
    header('Location: afficher_produits.php');
}
?>
</body>
</HTMl>