<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../asset/style/contact.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/b286cf6c9c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>


        <nav>
            <div id="logo">
                <a href="accueil.php">CVVEN</a>
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


    <section class="contact">
        <div class="contact-form">
            <h1>Contactez-<span>nous</span></h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque et molestias explicabo porro adipisci dolores nisi repudiandae quod culpa, unde possimus omnis.
                Dolorem nemo, odit explicabo ratione rem eos molestiae.</p>
            <form action="">
                <input type="text" placeholder="Nom" required>
                <input type="email" name="email" id="" placeholder="E-mail" required>
                <input type="text" placeholder="Sujet" required>
                <textarea name="text" cols="30" rows="10" placeholder="Votre message" required>

                    </textarea>

                <input type="submit" name="" value="Envoyez" class="btn">


            </form>
        </div>

    </section>

    <footer>
        <div class="footer-content">

            <h3>CVVEN</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, similique nulla officia atque veritatis at adipisci aspernatur nihil omnis mollitia repellendus eligendi porro repellat!</p>
            <ul class="socials">
                <li><a href=""><i class="fa fa-facebbok"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus"></i></a></li>

            </ul>

        </div>

        <div class="footer-bottom">
            <p>Copyright &copy;2023 CVVEN. design by <span>CVVEN</span></p>

        </div>
    </footer>




</body>

</html>