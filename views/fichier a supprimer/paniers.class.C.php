<?php
include "../config.php";
class panierC{

  function afficherPanierTest ($panier){
		echo "price: ".$panier->getPrice()."<br>";
		echo "desc: ".$panier->getDesc()."<br>";

	}

function ajouterAuPanier($panier){
  $sql="insert into panier (desc_pp,price) values (:desc,:price)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);

      $desc=$panier->getDesc();
      $price=$panier->getPrice();

  $req->bindValue(':desc',$desc);
  $req->bindValue(':price',$price);


          $req->execute();

      }
      catch (Exception $e){
          echo 'Erreur: '.$e->getMessage();
      }

}


	function afficherPanier(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
 ?>
