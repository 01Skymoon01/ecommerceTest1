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

		$sql="SElECT * From commande ORDER BY id_Commande DESC";
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

          //$idCC=$commande->get_IdCommande();
	        $IdCommande=$commande->get_IdCommande();


					$NomProduit=$commande->get_NomProduit()[$i];


					$IdProduit=$commande->get_IdProduit()[$i];

					$PrixProduits=$commande->get_PrixProduits()[$i];

					$QTEProduits=$commande->get_QTEProduits()[$i];



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

function SupprimerCommandeSesDetails($cin){



	$sql="DELETE FROM commande_details WHERE id_Commande=:cin";
	$db = config::getConnexion();
			$req=$db->prepare($sql);
	$req->bindValue(':cin',$cin);
	try{
					$req->execute();
				 // header('Location: index.php');
			}
			catch (Exception $e){
					die('Erreur: '.$e->getMessage());
			}
}
function SupprimerCommande($cin){



	$sql="DELETE FROM commande WHERE id_commande=:cin";
	$db = config::getConnexion();
			$req=$db->prepare($sql);
	$req->bindValue(':cin',$cin);
	try{
					$req->execute();
				 // header('Location: index.php');
			}
			catch (Exception $e){
					die('Erreur: '.$e->getMessage());
			}
}

function ModifierEtatCommande($cin,$etat){

$etat =(int)$etat;
if($etat == 1) $etat =0;
else if($etat == 0) $etat=1;
	$sql="update commande set etat_commande=:etat where id_commande=:cin";
	$db = config::getConnexion();
			$req=$db->prepare($sql);
	$req->bindValue(':cin',$cin);
	$req->bindValue(':etat',$etat);
	try{
					$req->execute();
				 // header('Location: index.php');
			}
			catch (Exception $e){
					die('Erreur: '.$e->getMessage());
			}
}

function RechercheCommande($haja){

	$sql="SELECT * FROM commande WHERE date_commande LIKE '%$haja%' OR id_commande=$haja OR id_client=$haja ORDER BY id_Commande DESC";


	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;

	}
			 catch (Exception $e){
					 die('Erreur: '.$e->getMessage());
			 }
}
function ClientPlusFidele(){


	$sql="select id_client ,COUNT(id_commande)c FROM commande GROUP BY id_client ORDER BY c DESC LIMIT 1  ";


	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;

	}
			 catch (Exception $e){
					 die('Erreur: '.$e->getMessage());
			 }
}
function ProduitBestSaler(){


	$sql="select Nom_Produit ,COUNT(id_commande) FROM commande_details GROUP BY id_produit ASC LIMIT 1   ";


	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;

	}
			 catch (Exception $e){
					 die('Erreur: '.$e->getMessage());
			 }
}

function RevenueParJour(){


	$sql="SELECT FORMAT(SUM(totalPrix_commande),2) revenue FROM commande WHERE date_commande IN (SELECT date_commande FROM commande WHERE DATE(date_commande)=DATE(NOW()) ) and etat_commande=1  ";


	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;

	}
			 catch (Exception $e){
					 die('Erreur: '.$e->getMessage());
			 }
}

function NombreDuCommandeNonPayees(){


	$sql="SELECT COUNT(id_commande) nbr FROM commande WHERE etat_commande=0 ";


	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;

	}
			 catch (Exception $e){
					 die('Erreur: '.$e->getMessage());
			 }
}

function RevenueParJoursGraph(){


	$sql="SELECT totalPrix_commande revenue ,date_commande  FROM commande WHERE etat_commande=1 ORDER BY date_commande DESC LIMIT 5 ";


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
