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
        <title>Connexion</title>
    </head>

    <body>
        <?php
            require('require/header.php');
        ?>
        <main class="fond-img">
            <h2>Connexion</h2>
                <form action="traitement/form-connexion.php" method="post">
                    <fieldset>
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login" ></input><br/>
                    
                        <label for="pwd">Password</label>
                        <input type="password" id="pwd" name="pwd" ><br/>

                        <label>&nbsp;</label>
                        <input type="submit" name="submit" value="connexion" class="submit" /> 
                        
                    </fieldset>    
                </form>
        </main> 

        <?php
            require('require/footer.php');
        ?> 

    </body>   
  </html>
