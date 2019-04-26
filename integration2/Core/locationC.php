<?php
/**
 *
 */
 include_once "../config.php";
 include_once "../entities/location.php";
class locationC
{


  		function ajouterlocationProc($location){




  			$sql="INSERT INTO loc (nom, prix, qte,datedeb,datefin,id_client) VALUES (:NomProduit,:PrixProduits,:QTEProduits,:dateDebut,:dateFin,:IDClient)";

  			$db = config::getConnexion();
  			try{
  	        $req=$db->prepare($sql);


  					$IDClient=$location->get_IDClient();


  					$PrixProduits=$location->get_PrixProduits();


  					$QTEProduits=$location->get_QTEProduits();

  			  	$dateDebut=$location->get_dateDebut();


  					$dateFin=$location->get_dateFin();


$NomProduit=$location->get_NomProduit();


	$req->bindValue(':IDClient',$IDClient);
  			$req->bindValue(':NomProduit',$NomProduit);

  			$req->bindValue(':PrixProduits',$PrixProduits);
  	    	$req->bindValue(':QTEProduits',$QTEProduits);
  			$req->bindValue(':dateDebut',$dateDebut);
  				$req->bindValue(':dateFin',$dateFin);
  				$req->execute();

  	        }
  	        catch (Exception $e){
  	            echo 'Erreur: '.$e->getMessage();
  	        }



  		}


      function Afficher(){

        $sql="SELECT * FROM `loc` ";
    		$db = config::getConnexion();
    		try{
    		$liste=$db->query($sql);
    		return $liste;
    		}
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }


  		}
      function SupprimerLocation($cin){



      	$sql="DELETE FROM loc WHERE idloc=:cin";
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
      function ModifierEtatLocation($cin,$etat){
      $db = config::getConnexion();
      $etat =(int)$etat;
       if($etat == 0){
         $etat=1;



       $sql="update loc set etat=:etat where idloc=:cin";
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


     }

     function RechercheLocation($haja){

     	$sql="SELECT * FROM loc WHERE idloc=$haja OR id_client=$haja ";


     	$db = config::getConnexion();
     	try{
     	$liste=$db->query($sql);
     	return $liste;

     	}
     			 catch (Exception $e){
     					 die('Erreur: '.$e->getMessage());
     			 }
     }

      			 // header('Location: index.php');



}

 ?>
