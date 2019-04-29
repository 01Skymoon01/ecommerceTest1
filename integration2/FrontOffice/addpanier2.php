<?PHP
require '../core/GestionPanier/paniers.class.c.php';
$panier= new panier();
$json = array('error' => true );
if (isset($_GET['id'])) {

  $id=$_GET['id'];
  $name=$_GET['name'];
  $price=(float)$_GET['price'];

   $test=$panier->add($id,$name,$price);

header("location:Panier.php");

}

?>
