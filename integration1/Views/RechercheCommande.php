<?PHP
include "../entities/commande/commande.class.php";
include "../core/GestionCommande/commande.class.c.php";
$CommandeC1=new CommandeC();
$json = array('error' => true );
if (isset($_GET["search"])){

//  var_dump($_GET["cin"]);

	$listeCommande=$CommandeC1->RechercheCommande($_GET["search"]);


}


//header('Location:CommandeList.php');
?>
<table>
    <tr>
       <th>   </th>
        <th>N°</th>
        <th>DATE</th>
        <th>PRIX TOTAL</th>
        <th>NOMBRE C°</th>
        <th>CIN CLIENT</th>
        <th>ETAT DE PAYMENT</th>
        <th>DETAILS</th>

    </tr>


<form action="SupprimerCommande.php" method="GET">


<?php
foreach($listeCommande as $row){ ?>
<?PHP if($row['etat_commande'] == 0){  ?>
      <tr style="background-color:#3B6B9A;">

<?PHP } else if($row['etat_commande'] == 1) { ?>
      <tr style="background-color:#365D84;">
<?php }      ?>
        <td>
        <form action="SupprimerCommande.php" method="GET">
            <!-- i class="fa fa-trash-o" aria-hidden="true"-->  <input type="submit" value="X" style="border: 0; background: none; font-size:16.2; font-weight: 700;">
         <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
         </form>
                                            </td>
        <td><?PHP echo $row['id_commande']; ?></td>
        <td><?PHP echo $row['date_commande']; ?></td>
        <td><?PHP echo $row['totalPrix_commande']; ?> TDN</td>
        <td><?PHP echo $row['nbProduit_commande']; ?></td>
        <td><?PHP echo $row['id_client']; ?></td>
        <td>
        <form action="ModifierCommande.php" method="GET"><i class="icon nalika-edit"></i>
<input type="submit" value="<?PHP if($row['etat_commande'] == 1) echo "VALIDE" ; else echo "NON" ?>" style="border: 0px; background: none;">
        <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
        <input type="hidden" value="<?PHP echo $row['etat_commande']; ?>" name="etat">

        </form></td>
                                            <td>
        <form action="DetailsCommandeList.php" method="GET">
                                            <input type="submit" value=">" style="border: 0; background: none; font-size:20px; font-weight: 900;">
        <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="cin">
        <input type="hidden" value="<?PHP echo $row['date_commande']; ?>" name="date">
        <input type="hidden" value="<?PHP echo $row['etat_commande']; ?>" name="etat">
        <input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="cinC">
        </form>
                                        </td>
    </tr>
<?php }?>
</table>
