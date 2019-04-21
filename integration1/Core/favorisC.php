<?PHP



require_once "../config.php";



class favorisC
{

	function listeFavoris(){
		$sql="SElECT * From favoris";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



  	public function ajouterFavoris($Membre) {

        		$db = config::getConnexion();
     			$sql="INSERT INTO favoris (id_client, nom_prod,id_produit)
  							     VALUES ( :nom, :prenom, :date_naissance)";


  			try{
          	$req=$db->prepare($sql);
          	$idClient=$Membre->get_idClient();
  			$nomProd=$Membre->get_nomProd();
  			$idProd=$Membre->get_idProd();

  			//($Membre);

  	   		$req->bindValue(':nom',$idClient);
  			$req->bindValue(':prenom',$nomProd);
  			$req->bindValue(':date_naissance',$idProd);

  			$req->execute();

  	        }
  	        catch (Exception $e){
  	            echo 'existe';
  	        }

      }

      public function supprimerFavoris($cin) {
        $c = config::getConnexion();
          $stmt = $c->prepare("DELETE FROM favoris WHERE id_produit=:cin");
          $stmt->bindValue(':cin', $cin);
          $stmt->execute();
    }

}

?>
