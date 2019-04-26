<?php

require_once "../config.php";

session_start();

if (isset($_GET['section'])) {
$section=htmlspecialchars($_GET['section']);
} else {
  $section= "";
}



if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {

   if(!empty($_POST['recup_mail'])) {
      $recup_mail=htmlspecialchars($_POST['recup_mail']);

      if(!preg_match("/^[a-zA-Z ]*$/",$recup_mail)) {
        $bdd = config::getConnexion();
        $mailexist=$bdd->prepare('SELECT cin,prenom FROM membres WHERE email =?');
        $mailexist->execute(array($recup_mail));
        $mailexist_count=$mailexist->rowCount();
        if ($mailexist_count == 1){
          $pseudo=$mailexist->fetch();
          $pseudo=$pseudo['prenom'];

          $_SESSION['recup_mail'] = $recup_mail;
          $recup_code="";
          for ($i=0; $i<=8 ; $i++){
            $recup_code .= mt_rand(0,9);
          }


          $bdd = config::getConnexion();
          $mail_recup_exist =$bdd->prepare ('SELECT id FROM recuperation WHERE mail=?');
          $mail_recup_exist->execute(array($recup_mail));
          $mail_recup_exist =$mail_recup_exist->rowCount();

          if ($mail_recup_exist==1) {
            $recup_insert=$bdd->prepare('UPDATE recuperation SET code =? WHERE mail =?');
            $recup_insert->execute(array($recup_code,$recup_mail));

          } else {
          $recup_insert=$bdd->prepare('INSERT INTO recuperation(mail,code) VALUES (?,?)');
          $recup_insert->execute(array($recup_mail,$recup_code));
        }

         $header="MIME-Version: 1.0\r\n";
         $header.='From:"geoconcept.com"<ashlynx1997@gmail.com>'."\n";
         $header.='Content-Type:text/html; charset="utf-8"'."\n";
         $header.='Content-Transfer-Encoding: 8bit';
         $message = '
         <html>
         <head>
           <title>Récupération de mot de passe</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>

                     <div align="center">Bonjour <b>'.$pseudo.'</b>,</div></br>
                     Voici votre code de récupération: <b>'.$recup_code.'</b></br>


                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';

         mail($recup_mail, "Récupération de mot de passe - PrimFX.com", $message, $header);
        header('Location:recuperation.php?section=code');

        } else {
        $error ="cette adresse mail n'est pas enregistée";
        }

      } else {
        $error="Adresse mail invalide";
      }


     }
    else {
      $error ="Veuillez entrer votre adresse mail";
    }
}


if(isset($_POST['verif_submit'],$_POST['verif_code'])) {
   if(!empty($_POST['verif_code'])) {
      $verif_code = htmlspecialchars($_POST['verif_code']);
      $bdd = config::getConnexion();
      $verif_req = $bdd->prepare('SELECT id FROM recuperation WHERE mail = ? AND code = ?');
      $verif_req->execute(array($_SESSION['recup_mail'],$verif_code));
      $verif_req = $verif_req->rowCount();
      if($verif_req == 1) {
        $bdd = config::getConnexion();
         $up_req = $bdd->prepare('UPDATE recuperation SET confirme = 1 WHERE mail = ?');
         $up_req->execute(array($_SESSION['recup_mail']));

         header('Location:recuperation.php?section=changemdp');
      } else {
         $error = "Code invalide";
      }
   } else {
      $error = "Veuillez entrer votre code de confirmation";
   }
}

if (isset($_POST['change_submit'])) {
  if (isset($_POST['change_mdp'],$_POST['change_mdpc'])) {
    $bdd = config::getConnexion();
    $verif_confirme=$bdd->prepare('SELECT confirme FROM recuperation WHERE mail = ?');
    $verif_confirme->execute(array($_SESSION['recup_mail']));
    $verif_confirme = $verif_confirme->fetch();
    $verif_confirme=$verif_confirme['confirme'];
    if($verif_confirme == 1) {
      $mdp=htmlspecialchars($_POST['change_mdp']);
      $mdpc=htmlspecialchars($_POST['change_mdpc']);

    if(!empty($mdp) AND !empty($mdpc)) {
      if ($mdp==$mdpc) {
        $mdp=md5($mdp);
        $bdd = config::getConnexion();
        $ins_mdp=$bdd->prepare('UPDATE membres SET mdp = ? WHERE email = ?');
        $ins_mdp->execute(array($mdp,$_SESSION['recup_mail']));
        $del_req = $bdd->prepare('DELETE FROM recuperation WHERE mail = ?');
         $del_req->execute(array($_SESSION['recup_mail']));
        header('Location: signin.php');
      } else {
        $error="Vos mots de passes ne correspondent pas!";
      }
    } else {
      $error="Veuillez remplir tous les champs!";
    }
  } else {
    $error="Veuillez valider votre mail!";
   }
  } else {
    $error="Veuillez remplir tous les champs!";
  }
}



require_once('recuperation_view.php');

?>
