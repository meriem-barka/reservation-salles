<?php
  session_start();
 $today = date('Y-m-d');
 $endWeek = date( 'Y-m-d', strtotime( 'friday this week' ) );
?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="media-queries/media-queries.css" rel="stylesheet" type="text/css">
        <title>Reservation</title>
    </head>

    <body>
        <?php
            require('require/header.php');
        ?>
        <main>
            <h2>Reservation</h3>
            <div class="resa-pro">
                <img src="img/salle de formation.jpg" alt="">
            </div>
                <form action="traitement/form-reservation-form.php" method="post">
                    <fieldset>

                        <label for="titre">Titre</label>
                        <input type="text" id="titre" name="titre"></input><br/>
                    
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description"><br/>

                        <label for="datedebut">Date</label>
                        <input type="date" id="datedebut" name="debut">

                        <label for="timedebut">à</label>
                        <select name="timedebut" id="heuredebut"><br/>
                            <option value="8:00">8:00</option>
                            <option value="9:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select><br/>

                        
                        <label for="timefin">à</label>
                        <select name="timefin" id="timefin">
                            <option value="9:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                        </select><br/>

                        <label>&nbsp;</label>
                        <input type="submit" name="submit" value="Validation" class="submit" />

                    </fieldset>    
                </form>
        </main> 

        <?php
            require('require/footer.php');
        ?> 

    </body>   
  </html>
