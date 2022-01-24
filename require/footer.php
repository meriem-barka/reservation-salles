<footer>
    <div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <?php if (!isset($_SESSION['id'])){?>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            <?php } else { ?>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="planning.php">Planning</a></li>
            <?php } ?>
            <li><a href="https://github.com/meriem-barka">Github</a></li>
        </ul>
        <p class="copyright">Copyright © 2021 All rights reserved</p>
    </div>
</footer>
