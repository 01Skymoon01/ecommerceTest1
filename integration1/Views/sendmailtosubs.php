<?php

require_once 'PHPMailerAutoload.php';
require_once "../core/membreC.php";

$temp= new MembreC();
$liste = $temp->listeclient();


$mail = new PHPMailer;
        //$mail->SMTPDebug = 2;// TCP port to connect to
        //echo $row['email'];
        //$mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
       
        $mail->Username = 'ashlynx1997@gmail.com';          // SMTP username
        $mail->Password = 'ash lynx123';// SMTP password
        $mail->SMTPSecure = 'tls';      // Enable TLS encryption, ssl also accepted
        $mail->Port = 587;
    foreach ($liste as $row) {
        $mail->setFrom('ashlynx1997@gmail.com', 'GeoConcept');
        $mail->addReplyTo('ash lynx123', 'GeoConcept');
        //$mail->addAddress('nour.khedher@esprit.tn ');
        //$mail->addAddress('elreb7chich@gmail.com ');
        $mail->addAddress($row['email'],$row['nom']);// Add a recipient
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail->isHTML(true);  // Set email format to HTML
        //$mail->addAttachment('img/img.png');
        $bodyContent = '<h1>Promotion Geoconcept</h1>';
        $bodyContent .= '<h2>Salut</h2>';
        $bodyContent .= '<h3>Contenu Mail</h3>';
        $mail->Subject = 'Promotion Geoconcept';
        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo nl2br ('Message has been sent to : ' . $row['email'] ) ."<br>" ;
        }
    }
    


////////////////////////////////////////////////////////////////////////////////////////////////////////////




?>

