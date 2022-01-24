<?php
session_start();

/* Connection à une base de données */

//mysqli_connet = connexion mysql
require('../traitement/bdd.php');

// Vérifier si le formulaire est soumis
if (isset($_POST['submit'])) {

    /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé*/
    $login = htmlspecialchars($_POST['login']);
    $password = $_POST['pwd'];

    // Si les champs est différent de vide donc rempli
    if (!empty($login) && !empty($password)) {

        // Selectioner les utilisateurs qui on le login que l'utilisateur a rentrer dans le formulaire 
        $req = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");
        $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
        
        if (!empty($res)) {

            //assignation valeur password, dans nouvelle variable
            if (password_verify($password, $res[0]['password'])) {
                $_SESSION['login'] = $res[0]['login'];
                $_SESSION['id'] = $res[0]['id'];
                header('Location: ../profil.php');
                exit();
            } else {
                $_SESSION['error'] = 'le mot de passe est incorrect';
                echo $_SESSION['error'];
                header('refresh: 1; URL=../connexion.php');
            }
        } else {
            $_SESSION['error'] = 'veuillez à vérifier tous vos informaations';
                echo $_SESSION['error'];
                header('refresh: 1; URL=../connexion.php');
        }
    } else {
        $_SESSION['error'] = 'Tous les champs sont vide';
        echo $_SESSION['error'];
        header('refresh: 1; URL=../inscription.php');
    }
} else {
    $_SESSION['error'] = 'Tous les champs sont vide';
    echo $_SESSION['error'];
}
