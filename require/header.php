<header>

    <input type="checkbox" id="toggle">
        
        <label for="toggle" class="hamburger">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
        </label>

    <div class="nav">
        <div class="nav-wrapper">
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <?php if(!isset($_SESSION['id'])){?>
                        <li><a href="inscription.php">Inscription</a></li>
                        <li><a href="connexion.php">Connexion</a></li>
                    <?php } else { ?>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="reservation-form.php">Réservation</a></li>
                        <li><a href="planning.php">Planning</a></li>
                        <li><a href="traitement/deconnexion.php">Deconnexion</a></li>
                    <?php } ?>

                    <?php if(isset($_SESSION['id'])){
                    }?>      
                </ul>
            </nav>
        </div>
    </div>

    <!--<div class="image1">
        <img src="img/banniere.png" alt="image">
    </div> -->      
</header>