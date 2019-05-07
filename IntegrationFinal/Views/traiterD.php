<?PHP
include "../core/DemandeC.php";
$demandeC=new DemandeC();
if (isset($_POST["ID_D"])){
    $demandeC->traiterD($_POST["ID_D"]);
    header('Location: demandeBACK.php');
}

?>
