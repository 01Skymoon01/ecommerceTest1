<?php
require_once "PHPMailer-5.2-stable/PHPMailerAutoload.php";
require_once "../Core/ProduitIntC.php";
require_once "../Core/AdminsC.php";
$temp = new AdminsC();
$listeadmins = $temp->afficherAdmins();
$produit1C=new ProduitIntC();
$rupture=$produit1C->RuptureStock();
//var_dump($rupture);
if ($rupture >= 1) {
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 2;// TCP port to connect to
        //echo $row['email'];
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        //$mail->Username = 'elreb7chich';          // SMTP username
        //$mail->Password = 'plataoplomo1994';
        $mail->Username = 'hatem.temimi@esprit.tn';          // SMTP username
        $mail->Password = 'neverbackdownX512';// SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;

    foreach($listeadmins as $row) {
        $mail->setFrom('GeoconceptDashBoardAdmin@gmail.com', 'GeoConcept');
        $mail->addReplyTo('GeoconceptDashBoardAdmin@gmail.com', 'GeoConcept');
        //$mail->addAddress('nour.khedher@esprit.tn ');
        //$mail->addAddress('elreb7chich@gmail.com ');
        $mail->addAddress($row['email'],$row['login']);// Add a recipient
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail->isHTML(true);  // Set email format to HTML
        $mail->addAttachment('img/img.png');
        $bodyContent = '<h1>Stock en alerte</h1>';
        $bodyContent .= '<h2>Au moins un article est en rupture de stock.</h2>';
        $bodyContent .= '<h3>Visitez Votre Dashboard Admin.</h3>';
        $mail->Subject = 'Rupture de stock';
        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo nl2br ('Message has been sent to : ' . $row['login'] ) ."<br>" ;
        }
    }

}
else {
    echo "Pas d'article en rupture de stock.";
}
?>
