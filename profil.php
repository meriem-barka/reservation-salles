
<?php
  session_start();

?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="media-queries/media-queries.css" rel="stylesheet" type="text/css">
        <title>Profil</title>
    </head>

    <body>
        <?php
            require('require/header.php');
        ?>
        <main>
            <h2>Profil</h2>
            <div class="resa-pro">
                <img src="img/salle de formation.jpg" alt="">
            </div>
            <p class="profil"><?php if(isset($_SESSION['login'])){
           echo "Bonjour ".$_SESSION['login']; }?><br/>
            It is a long established fact that a reader will be distracted by the readable content of a 
            page when looking at its layout. The point of using Lorem 
            Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
            'Content here, content here', making it look like readable English. Many desktop 
            publishing packages and web page editors now use Lorem Ipsum as their 
            default model text, and a search for 'lorem ipsum' 
            will uncover many web sites still in their infancy. Various versions have 
            evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                <form class="profil" action="traitement/form-profil.php" method="post">
                    <fieldset> 
                        <div>
                            <label for="newlogin">Login</label>
                            <input type="text" id="newlogin" name="newlogin"></input><br/>
                        </div>

                        <div>
                            <label for="newpwd">Password</label>
                            <input type="password" id="newpwd" name="newpwd"><br/>
                        </div>

                        <label>&nbsp;</label>
                        <input type="submit" name="submit" value="Editer" class="submit"/>

                    </fieldset>    
                </form>
        </main> 

        <?php
            require('require/footer.php');
        ?> 

    </body>   
  </html>
