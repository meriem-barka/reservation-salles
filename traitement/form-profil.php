<?php
    session_start();

/* Connection à une base de données */

    //mysqli_connet = connexion mysql
    require('../traitement/bdd.php');
  
    if(isset($_POST['submit'])){

        if (isset($_SESSION['login']) && isset($_SESSION['id'])) {
    
            if (!empty($_POST['newlogin']) && !empty($_POST['newpwd'])) {
    
                $id = $_SESSION['id'];
                $newLogin = $_POST['newlogin'];
                $newPwd = $_POST['newpwd'];
    
            //$salt = sha1($nom);
                $hashed_password = password_hash($newPwd, PASSWORD_BCRYPT);
    
                $req = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id = $id");
                $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
    
                if (!empty($_POST['newlogin']) && !empty($newPwd)) {
                    $insertlogin = mysqli_query($bdd, "UPDATE utilisateurs SET login ='$newLogin', password = '$hashed_password' WHERE id ='$id'");
                    $_SESSION['send'] = 'Votre login a bien était modifier';
                    header('Refresh: 1; URL=../index.php');
                }
            }else{
                $_SESSION['send'] = 'Veuillez remplir tous les champs';
                echo $_SESSION['send']; 
                header('Refresh:1; URL=../profil.php');  
            }
        } else{
            $_SESSION['send'] = 'Les champs sont vide';
            echo $_SESSION['send']; 
           header('Refresh:1; URL=../profil.php');
        }     
    } else{
        $_SESSION['send'] = 'Les champs sont vide';
        echo $_SESSION['send']; 
       header("Refresh:1; url=../profil.php");
    }
    
?>   









