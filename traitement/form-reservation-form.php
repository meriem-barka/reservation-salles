<?php
session_start();

if (isset($_SESSION['id'])) {
   $id =  $_SESSION['id'];
}

//mysqli_connet = connexion mysql
require('../traitement/bdd.php');



// Vérifier si le formulaire est soumis
if (isset($_POST['submit'])) {

   /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé*/

   $titre = $_POST['titre'];
   $description = $_POST['description'];
   $date_debut = $_POST['debut'];
   $heure_debut = $_POST['timedebut'];
   //$date_fin = $_POST['fin'];
   $heure_fin = $_POST['timefin'];
   $full_date_debut = "$date_debut $heure_debut";
   $full_date_fin = "$date_debut $heure_fin";
   $user_id = $_SESSION['id'];

   // ON VERIFIE SI LE CRENAU EST DANS LA TABLE
   $req2  = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut =  '$full_date_debut'");
   $resu  = mysqli_fetch_all($req2, MYSQLI_ASSOC);


   // Si les champs est différent de vide donc rempli
   if (!empty($titre) && !empty($description) && !empty($date_debut) && !empty($heure_debut) && !empty($heure_fin)){

      if (strtotime($heure_fin) - strtotime($heure_debut) == 3600){

         // Variable pour le WEEKEND.
         $dayweekend = strtotime($date_debut);
         $dayweekend = date('N', $dayweekend);

         if ($dayweekend  == 6 ||  $dayweekend  == 7) {
            $_SESSION['Error'] = 'Pas de reservation les Samedis et les Dimanches';
            echo $_SESSION['Error'];
            header('Refresh: 2; URL=../reservation.php');
         }else{

            if (empty($resu)){
               // On inscrit l'utilisateur dans la base de donée
               mysqli_query($bdd, "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description','$full_date_debut', '$full_date_fin','$id')");
               header('Location:../planning.php');
            }else{
               $_SESSION['Error'] = 'Désolés créneaux déjà pris';
               echo $_SESSION['Error'];
               header('Refresh: 1; URL=../reservation-form.php');
            }
         }
      } else {
         $_SESSION['Error'] = 'Vous ne pouvait pas réserver la salle plus d une heure';
         echo $_SESSION['Error'];
         header('Refresh: 1; URL=../reservation-form.php');
      }
   } else {
      $_SESSION['Error'] = 'Tous les champs doivent être remplis';
      echo $_SESSION['Error'];
      header('Refresh: 1; URL=../reservation-form.php');
   }
}
