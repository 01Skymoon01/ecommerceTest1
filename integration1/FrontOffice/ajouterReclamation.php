<?PHP
include "../entities/Reclamation.php";
include "../core/ReclamationC.php";
require_once '../lib/phpmailer/PHPMailerAutoLoad.php';

if (isset($_POST['subject']) and isset($_POST['message'])){
    $date= date_create()->format('Y-m-d');

    $a=$_POST['user'];
    $reclamation1=new Reclamation($date,$_POST['subject'],$_POST['message'],"en attente",$a);
    $reclamationC=new ReclamationC();
    $reclamationC->ajouterReclamation($reclamation1);


    $db= mysqli_connect("localhost","root","","pac");
    $sql ="SElECT email FROM membres WHERE cin='$a' ";
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
   $row_data = mysqli_fetch_array($result);
    $to =$row_data['MAIL'];
    $subject = "Votre Reclamation a bien ete reçu";
    $messageBody ="Ce mail represente votre ticket de reclamation deposé chez Geoconcept. DO NOT DELETE.";
    if( $count ==0){
        echo"Jointurek ghalta";
        return;
    }
    else
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; // authentication enabled
        $mail->IsHTML(true);
        $mail->SMTPSecure = 'ssl';//turn on to send html email
        // $mail->Host = "ssl://smtp.zoho.com";
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "gintokiismyhusband@gmail.com";
        $mail->Password = "zouzou11199";
        $mail->SetFrom("gintokiismyhusband@gmail.com", "geoconcept");
        $mail->Subject = $subject;

        $mail->Body = $messageBody;
        $mail->AddAddress($to);

        if(!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else {
            echo "Message has been sent successfully";
        }
    }
    //header('Location:contact.php');
    echo "<script type=\"text/javascript\">window.alert('Reclamation ajoutée Verifiez votre mail.');
                window.location.href='contact.php'</script>";
}else{

    echo "<script type=\"text/javascript\">window.alert('Verifiez vos champs.');
                window.location.href='contact.php'</script>";

}


?>
