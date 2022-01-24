<?php
session_start();

//mysqli_connet = connexion mysql
require('traitement/bdd.php');

$req = mysqli_query($bdd, "SELECT * FROM reservations");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="media-queries/media-queries.css" rel="stylesheet" type="text/css">
    <title>Planning</title>
</head>

<body>

    <?php
    require('require/header.php');
    ?>
    <main>
        <h2>Votre Planning</h2>
        <img class="img-plann"src="img/paper.jpg" alt="">

        <table>
            <thead>
                <tr>
                    <th>Horaire</th>
                    <?php
                    $arr = [
                        "Monday" => "Lundi",
                        "Tuesday" => "Mardi",
                        "Wednesday" => "Mercredi",
                        "Thursday" => "Jeudi",
                        "Friday" => "Vendredi",
                        "Saturday" => "Samedi",
                        "Sunday" => "Dimanche"
                    ];
                    $prev = date("y-m-d", strtotime('monday this week'));
                    $date = date_create($prev);
                    $day = date_format($date, "l");
                    $fulldate = date_format($date, "d-m-Y");
                    echo "<th>$arr[$day]<br/>$fulldate</th>";
                    
                    for ($i = 1; $i <= 6; $i++) {
                        $date = date("y-m-d", strtotime($prev . "+$i day"));
                        $date = date_create($date);
                        $day = date_format($date, "l");
                        $fulldate = date_format($date, "d-m-Y");
                        echo "<th>$arr[$day]<br/>$fulldate</th>";
                    }
                    ?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                        for ($heure = 8; $heure < 19; $heure++) {
                            echo "<tr>";
                            echo "<td>" . $heure . "h-" . ($heure + 1) . "h</td>";

                            for ($colone = 1; $colone <= 7; $colone++) {
                                echo "<td>";

                                foreach ($res as $value) {
                                    $date_debut = strtotime($value['debut']);
                                    $day_debut = date('N', $date_debut);
                                    $heure_debut = date('H', $date_debut);

                                    $date_fin = strtotime($value['fin']);
                                    $day_fin = date('N', $date_fin);
                                    $heure_fin = date('H', $date_fin);
                                    
                                    $heure_debut = intval($heure_debut);
                                    $heure_fin = intval($heure_fin);
                                    
                                    $id_res = $value['id'];

                                    if ($day_debut == $colone  && $heure_debut == $heure) {
                                        echo "<a href='reservation.php?evenement=$id_res'>" . $value['titre'] . "" . $value['id'] . "</a>";
                                    } 
                                
                                }
                            
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>

    </main>
    <?php
    require('require/footer.php');
    ?>

</body>

</html>