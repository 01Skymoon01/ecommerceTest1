<?PHP
include "../entities/Rdv.php";
include "../core/RdvC.php";

if (isset($_POST['date']) and isset($_POST['subject']) and ( strtotime ($_POST['date']) > strtotime('now') ) ){
    $date= date_create()->format('Y-m-d');
    $a=$_POST['user'];
    $rdv1=new Rdv($date,$_POST['date'],$_POST['subject'],"en attente",$a);
    $rdv1C=new RdvC();
    $rdv1C->ajouterRDV($rdv1);

    //header('Location:RDV.php');
    echo "<script type=\"text/javascript\">window.alert('Rendez-vous ajoutée avec succés.');
                window.location.href='RDV.php'</script>";
}else{
    echo "<script type=\"text/javascript\">window.alert('Verifiez votre date.');
                window.location.href='RDV.php'</script>";

}


?>