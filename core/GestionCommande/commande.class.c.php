<?PHP
include "../config.php";
class CommandeC {

	function ajouterCommande($commande){
    $nbProduit=0;
    $prix=0;
    $idClient=0;

		$sql="insert into commande (id_client,totalPrix_commande,nbProduit_commande) values (:idClient,:prix,:nbProduit)";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);


        $nbProduit=$commande->get_nbProduit();
        $prix=$commande->get_totalPrix();
        $idClient=$commande->get_IDClient();

		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':nbProduit',$nbProduit);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherTouTCommande(){

		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherCommandeEnCours($commande){

	  $idClient=0;
		$idClient=$commande->get_IDClient();

 		$sql="SELECT * FROM commande WHERE date_commande IN (SELECT max(date_commande) FROM commande  WHERE id_client=$idClient)";
 		$db = config::getConnexion();
 		try{
 		$liste=$db->query($sql);


		foreach($liste as $row){
		$datas = array(
			':id_commande'=>$row['id_commande'],
		 ':date_commande'=>$row['date_commande'],
		  ':totalPrix_commande'=>$row['totalPrix_commande'],
			':nbProduit_commande'=>$row['nbProduit_commande'],
			':id_client'=>$row['id_client']);
			//$liste=array($row['id_commande'],$row['date_commande'],$row['totalPrix_commande'],$row['nbProduit_commande'],$row['id_client']);
     var_dump($datas);
		 return $datas;
	 }
	}

         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }


 	}



		function ajouterDetailsCommande($commande,$taille){
			 $IdCommande=0 ;
		   $IdProduit= 0;
			 $PrixProduits= 0;
		   $QTEProduits= 0;
			 $NomProduit= "";
			 $i=0;

for ($i=0; $i < $taille ; $i++) {

			$sql="INSERT INTO commande_details (id_Commande,Nom_Produit,id_produit,Qte_Produit,PRIX_Produit) VALUES (:IdCommande,:NomProduit,:IdProduit,:QTEProduits,:PrixProduits)";

			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
?><p>***************Fonction Ajouter commande detail***********</p><?php
          //$idCC=$commande->get_IdCommande();
	        $IdCommande=$commande->get_IdCommande();
					?><p>***************Class detail ID***********</p><?php
				var_dump($IdCommande);

					$NomProduit=$commande->get_NomProduit()[$i];
					?><p>***************Class detail NomProduit***********</p><?php
				var_dump($NomProduit);

					$IdProduit=$commande->get_IdProduit()[$i];
				var_dump($IdProduit);

					$PrixProduits=$commande->get_PrixProduits()[$i];
					?><p>***************Class detail PRIX***********</p><?php
				var_dump($PrixProduits);

					$QTEProduits=$commande->get_QTEProduits()[$i];
				var_dump($QTEProduits);


			$req->bindValue(':IdCommande',$IdCommande);
			$req->bindValue(':NomProduit',$NomProduit);
			$req->bindValue(':IdProduit',$IdProduit);
			$req->bindValue(':PrixProduits',$PrixProduits);
	    $req->bindValue(':QTEProduits',$QTEProduits);
	            $req->execute();

	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }


				var_dump($i);
		}

		}

		function afficherDetailsCommandeEnCours($Cid){



	 		$sql="SELECT Nom_Produit, Qte_Produit, PRIX_Produit , FORMAT(Qte_Produit*PRIX_Produit,2) TOTAL FROM commande_details WHERE id_Commande=$Cid";
	 		$db = config::getConnexion();
	 		try{
	 		$liste=$db->query($sql);

	/*
			foreach($liste as $row){
				?>
			<ul class="list-group list-group-flush">
			  <li class="list-group-item"><?PHP echo $row['id_commande']; ?></li>
			  <li class="list-group-item"><?PHP echo $row['date_commande']; ?></li>
			  <li class="list-group-item"><?PHP echo $row['totalPrix_commande']; ?></li>
			  <li class="list-group-item"><?PHP echo $row['nbProduit_commande']; ?></li>
			  <li class="list-group-item">client: <?PHP echo $row['id_client']; ?></li>

			</ul>
			<?PHP
		}*/
			return $liste;

	 		}
	         catch (Exception $e){
	             die('Erreur: '.$e->getMessage());
	         }
	 	}
		function afficherPTSFidelite($Cid){



	 		$sql="SELECT COUNT(MOD(totalPrix_commande,50)) PTS_FIDELITE FROM commande WHERE id_client=$Cid";
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
