<?php 

session_start();
require_once "../config.php";

if (isset($_SESSION['cin']) and $_SESSION['cin'] > 0 )
{
    $getcin=$_SESSION['cin'];
    $bdd = config::getConnexion();
    $requser=$bdd->prepare('SELECT avatar FROM membres WHERE cin = ?');
    $requser->execute(array($getcin));
    $userinfo = $requser->fetch();



$sql="SELECT prenom,avatar FROM membres WHERE cin != $getcin";
        $db = config::getConnexion();
       
        $userinfo2=$db->query($sql);

        var_dump($userinfo2->fetchAll());
       
}


?>


<html>
    <head>
        <title>Page HTML de test</title>
    </head>
    <body bgcolor="#d3c89d">
        <div align="center">
            <img src="images/comm.png" style="width: 90px; height: 80px; "><h1 style="padding-right:2.9%; padding-top: -18%;">Vos avis:</h1>
            <?php 

                    $bdd = config::getConnexion();


                    $commentaires = $bdd->prepare('SELECT id, pseudo, commentaire FROM commentaires ORDER BY id DESC');
                    $commentaires->execute();

while($c = $commentaires->fetch()) { ?>
                    
            <table width="1000" border="0" border-color="#d1c286" border-style="solid" cellpadding="1" cellspacing="1">


               

                    
                <td height="50" width="1100" bgcolor="f7f7f7" style=" border-radius: 3px; padding-left: 20px; padding-top: 20px; border-spacing : 10px;">
<div >

                    <?php


                      if (!empty($userinfo['avatar']) and ( $_SESSION['prenom'] == $c["pseudo"])) {

                          ?>
                    <a ><img src="membres/avatars/<?php echo $userinfo['avatar'];?>" style=" border-radius: 50%;  width: 40px; height: 40px;  float: left; " hspace="10" /></a>

                    <p style="color: #d3c89d; padding-top: 12px; margin-left: 12px; font-size: 20px;" ><?= $c['pseudo'] ?>: </p></br>

                    <?php } 

foreach($userinfo2 as $values){
                    

                    if($c['pseudo'] == $values['prenom']) {?>
<a ><img src="membres/avatars/<?php echo $values['avatar'];?>" style=" border-radius: 50%;  width: 40px; height: 40px;  float: left; " hspace="10" /></a>
<p style="color: #d3c89d; padding-top: 12px; margin-left: 12px; font-size: 20px;" ><?= $c['pseudo'] ?>: </p></br>
<?php
                    }

                    }


                    ?>






                </div>

                    <div style="padding-left: 30px; padding-bottom: 20px" >
                        
                    <?= $c['commentaire'] ?>
                        <?php if(isset($_SESSION['prenom'])) { 
                            if($_SESSION['prenom'] == $c["pseudo"]) {
                            ?>                              
                                    <a href="deleteCommentaire.php?id=<?php echo $c["id"]; ?>" value="supprimer"  style="margin-left: 96%;" >
                              <img src="images/delete.png" style="height: 25px; width: 25px;">
                                                    </a>


                                <?php }} ?>

                    </div>

                </td></br>

            <?php } ?>
        </div align="center">
    </body>
</html>