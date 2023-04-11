<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../asset/style/accueil.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="container">

        <header>


            <nav>
                <div id="logo">
                    <a href="./accueil.php">CVVEN</a>
                </div>
                <ul class="nav_links">
                    <li class="liste"><a class="link" href="./accueil.php">Accueil</a></li>
                    <li class="liste"><a class="link" href="./contact.php">Contact</a></li>
                    <li class="liste"><a class="link" href="./about.php">À propos</a></li>
                </ul>
            </nav>
            <?php if (!isset($_SESSION["isLogin"])) : ?>
                <a class="cta" href="../auth/connexion.php"><button class="bouton">Connexion</button></a>
            <?php else : ?>
                <a class="cta" href="../auth/deconnexion.php"><button class="bouton">Déconnexion</button></a>
            <?php endif ?>
        </header>

        <div class="site-container">
            <p>
                Bienvenue à
            </p>
            <h1>CVVEN</h1>

            <h4>EN APESANTEUR ? VENZ PROFITEZ DE VOTRE SEJOUR CHEZ NOUS...</h4>

            <div class="row">
                <a href="./PageOffrePrincipale.php">Voir les offres<span>&#x27f6</span></a>


                <span>
                    Lorem ipsum dolor sit amet. Rem alias odio et quae perspiciatis
                    et commodi aliquid eum asperiores quia. </br>
                    Qui fugit illum ut vero ullam aut autem nulla.
                    Id soluta illum!
                </span>

            </div>


        </div>

        <div class="social-icons">
            <a href=""><img src=""></a>
            <a href=""><img src=""></a>
            <a href=""><img src=""></a>
            <a href=""><img src=""></a>




        </div>
    </div>
</body>

</html>