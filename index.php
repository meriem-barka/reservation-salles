<?php 
    session_start();
?> 


<!DOCTYPE html>
<html lang="fr">
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
        <?php
            require('require/header.php');
        ?>

        <main>
            <aside>
                <img src="img/salle de formation.jpg" alt="">
                <h1>Résérvée votre salles de Réunion et de Conférence.
                Et de gérer de Manière moderne les espaces d'entreprise.</h1> 
            </aside>

            <h2>Nos différentes Salles</h2>
            
            <section class="text"> 
                <div class="imagecenter"> 
                    <img src="img/salle de conférence.jpg"><img/>
                </div> 
                
                <div>
                <div class="textright">
                    <h3 class="titre1"><a href="salles.php">Salle de Conférence</a></h3>   
                    <P>La salle de conférence est ouverte aux lecteurs inscrits et souhaitant travailler en groupe, de 9h à 19h45, du lundi au vendredi (sauf le samedi la salle esr fermé.

                    Description
                    surface : 17m²
                    nombre de places : 4 places
                    matériel : un rétroprojecteur
                    Modalités de réservation
                    Les demandes de réservation peuvent être effectuées : 
                    - sur place, au 1er étage de la bibliothèque. 
                    - à distance, sur Affluences

                    La réservation se fait pour une durée de 2 heures maximum. Elle peut être prolongée sur demande, au terme de la réservation, en période de faible fréquentation, si aucune autre réservation n’est enregistrée.</P>  
                </div>  
                

                <div class="imagecenter"> 
                    <img src="img/salle de groupe.jpg"><img/>
                </div>

                <div class="textleft">    
                    <h3 class="titre2"><a href="salles.php">Salle de formation</a></h3>   
                    <P>La salle de formation de la BIS (15 places équipées d’ordinateurs, 25 places avec tables ou 49 places simples, sans tables), peut être réservée du lundi au vendredi, entre 9h et 19h45, uniquement par les enseignants, et les chercheurs pour des séminaires, ateliers, réunions, colloques, formations d’étudiants, etc., notamment s’ils souhaitent utiliser la documentation (imprimée ou électronique) de la bibliothèque dans le cadre de leur enseignement.

                    Description
                    1 poste informatique et 1 imprimante,
                    1 rétroprojecteur interactif et 1 tableau blanc,
                    1 téléphone vous permettant de joindre un interlocuteur au sein de la bibliothèque avec une liste de contacts.
                    Surface : 62m²

                    Nota bene : cette salle est accessible aux personnes à mobilité réduite.</P>  
                </div> 
                    

                <div class="imagecenter"> 
                    <img src="img/salle de groupe gris.jpg"><img/>
                </div>  

                <div> 
                    <h3 class="titre3"><a href="salles.php">Salle de groupe gris</a></h3>   
                    <P>La salle de groupe de la BIS (15 places équipées d’ordinateurs, 25 places avec tables ou 49 places simples, sans tables), peut être réservée du lundi au vendredi, entre 9h et 19h45, uniquement par les enseignants, et les chercheurs pour des séminaires, ateliers, réunions, colloques, formations d’étudiants, etc., notamment s’ils souhaitent utiliser la documentation (imprimée ou électronique) de la bibliothèque dans le cadre de leur enseignement.

                    Description
                    1 tv 1 imprimante,
                    1 rétroprojecteur interactif,
                    1 téléphone vous permettant de joindre un interlocuteur au sein de la bibliothèque avec une liste de contacts.
                    Surface : 62m²

                    Nota bene : cette salle est accessible aux personnes à mobilité réduite.</P>  
                </div>  
            </section>       

        </main>

        <?php
            require('require/footer.php');
        ?>
    
    </body>
</html>
