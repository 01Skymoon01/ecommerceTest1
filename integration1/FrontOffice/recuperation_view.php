
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
              
              <div class="card-body">
                   
         

            <article>
              <h4 class="title-element">Récupération de mot de passe</h4></br></br>
              <?php if($section == 'code') { ?>
              Un code de vérification vous a été envoyé par mail: <?= $_SESSION['recup_mail'] ?></br></br>
              <form method="post" class="default-form">
                <input type="text" placeholder="Code de vérification" name="verif_code" /></br></br>
                <input class="btn btn--radius btn--green" type="submit" value="Valider" name="verif_submit" />
              </form>
              <?php } else if($section=='changemdp') { ?>

                Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?></br></br>
                <form method="post" class="default-form">
                <input type="password" placeholder="Nouveau mot de passe" name="change_mdp" /></br></br>
                <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc" /></br></br>
                <input class="btn btn--radius btn--green" type="submit" value="Valider" name="change_submit" />
              </form>


              <?php } else { ?>
              <form method="post" class="default-form">
                <input type="email" placeholder="Adresse mail" name="recup_mail" /></br></br>
                <input class="btn btn--radius btn--green" type="submit" value="Valider" name="recup_submit" />
              </form>
              <?php } ?>
              <?php if(isset($error)) {echo '<span style="color: red">'.$error.'</span>'; } else
              { echo "<br/>"; } ?>
              
            </article>

              </div>
            </div>
        </div>
    </div>

   

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->