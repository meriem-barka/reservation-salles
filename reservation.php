<?php
  session_start();

    //mysqli_connet = connexion mysql
    require('traitement/bdd.php');

// Selectioner les utilisateurs qui on le login que l'utilisateur a rentrer dans le formulaire 
$req = mysqli_query($bdd, "SELECT id_utilisateur, login, titre, description, debut, fin FROM reservations
INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="media-queries/media-queries.css" rel="stylesheet" type="text/css">
        <title>Accueil</title>
    </head>

    <body>
        <?php require('require/header.php');?>

        <main>
        <h2>Vos Réservations</h2>
          <div class="container">
            <div class="resa-img">  
              <img src="img/diary.png" alt="">
            </div>

            <div class="reservation">
              <?php 
                  foreach($res as $value) { ?>
                    <div class="event">
                      <p><span>Titre : </span><?php echo $value['titre']?></p>
                      <p><span>Nom : </span><?php echo $value['login']?></p>
                      <p><span>Description : </span><?php echo $value['description']?></p>
                      <p><span>Date de début : </span><?php echo $value['debut']?></p>
                      <p><span>Date de fin : </span><?php echo $value['fin']?></p>
                    </div>
              <?php } ?>  
            </div>
          </div> 

        </main> 

        <?php require('require/footer.php');?> 

    </body>   
  </html>
