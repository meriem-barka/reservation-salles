<?php
    session_start();

    /* Connection à une base de données */

    //mysqli_connet = connexion mysql
    require('../traitement/bdd.php');
   
    // Vérifier si le formulaire est soumis
    if (isset($_POST['submit']) ) {

        /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé*/
        $login = $_POST['login'];
        $password = $_POST['pwd'];
        $password2 = $_POST['pwd2'];

        //$salt = sha1($nom);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Si les champs est différent de vide donc rempli
        if (!empty($login) &&  !empty($password) && !empty($password2)) {
      
            // Selectioner les utilisateurs qui on le login que l'utilisateur a rentrer dans le formulaire 
            $req = mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login = '$login' " );
            $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
 

            //si count = 0 le login est libre
            if(count($res) == 0){

                if ($password2 == $password){
                    // On inscrit l'utilisateur dans la base de donée
                    mysqli_query($bdd, "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$hashed_password')");
                    header ('Location:../connexion.php');
                }else{
                    $_SESSION['Error'] = 'les mots de passe ne sont pas similaires, Vous allez être redirigé... .';
                    echo $_SESSION['Error'];
                    header ('refresh: 1; URL=../inscription.php');   
                }

            }else{
                $_SESSION['Error'] = 'login où le mot de passe est incorrect.';
                echo $_SESSION['Error'];
                header ('refresh: 1; URL=../index.php');
            }

        }else {
           $_SESSION['Error'] = 'Tous les champs doivent être remplis';
           echo $_SESSION['Error'];
           header ('refresh: 1; URL=../inscription.php');
        }
        

    }    
?>