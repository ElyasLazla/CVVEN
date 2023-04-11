<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/style/OffrePage.css" type="text/css" charset="utf-8" />
  <script src="https://kit.fontawesome.com/b286cf6c9c.js" crossorigin="anonymous"></script>
  <title>Offre Lozere</title>

</head>

<body>

  <?php if (isset($_SESSION["MsgConsole"])) : ?>
    <script>
      console.log(`<?php echo $_SESSION["MsgConsole"]; ?>`);
    </script>
  <?php endif; ?>

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


  <section>
    <div class="main">
      </br>
      <div class="men_text">


        <h1>Hotel<span>Elexir</span></h1>
      </div>

      <div class="main_image">
        <img src="https://www.echo-web.fr/wp-content/uploads/e2c5c10900c5073c9cba7fc552400d70.jpg" alt="">

      </div>

    </div>

    <div class="rating"><!--
    --><a href="#5" title="Donner 5 étoiles">☆</a><!--
    --><a href="#4" title="Donner 4 étoiles">☆</a><!--
    --><a href="#3" title="Donner 3 étoiles">☆</a><!--
    --><a href="#2" title="Donner 2 étoiles">☆</a><!--
    --><a href="#1" title="Donner 1 étoile">☆</a>
    </div>
    </br>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam reprehenderit esse cupiditate tenetur nisi. Quibusdam est natus non, dolores consequatur provident pariatur culpa, omnis odit excepturi ab, vel velit. Laboriosam?
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

    <div class="main_btn">
      <a href="vraiformulaire.php"><button class="btn">Réservez <i class="fa-solid fa-angle-right"></i></button></a>

    </div>

  </section>


  <div class="slider">
    <div class="slides">

      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">


      <div class="slide first"><img src="https://th.bing.com/th/id/R.851f59a01e962e17ffab0fc7c1c4c9bc?rik=v3RZNU1tu06HMQ&pid=ImgRaw&r=0" alt=""></div>

      <div class="slide"><img src="https://th.bing.com/th/id/R.46924e8ecda1d1659d6e1f82f6f582b2?rik=44tbmsdnJ4jxuQ&pid=ImgRaw&r=0" alt=""></div>

      <div class="slide"><img src="https://i.pinimg.com/originals/01/4d/7f/014d7f6218f07ac9cd3173cca307757f.jpg" alt=""></div>

      <div class="slide"><img src="https://www.lareserve-paris.com/wp-content/uploads/2020/11/g8h0635-1.jpg" alt=""></div>

      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
    </div>

    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
  </div>


  <section class="services sec-width" id="services">
    <div class="title">
      <h3>SERVICES</h3>
    </div>

    </br>

    <div class="services-container">
      <article class="services">
        <div class="service-icon">
          <span>
            <i class="fa-solid fa-utensils"></i>
          </span>

        </div>
        <div class="service-content">
          <p class="tall-size strong"><strong>FOOD SERVICES</strong></p></br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis voluptate exercitationem nesciunt quia quaerat consectetur, a dolor pariatur unde praesentium necessitatibus. Deleniti ipsam alias distinctio similique deserunt porro quam!</p>


        </div>
      </article>

      <article class="services">
        <div class="service-icon">
          <span>
            <i class="fa-solid fa-water-ladder"></i>
          </span>

        </div>

        <div class="service-content">
          <p class="tall-size strong"><strong>PISCINE</strong></p></br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis voluptate exercitationem nesciunt quia quaerat consectetur, a dolor pariatur unde praesentium necessitatibus. Deleniti ipsam alias distinctio similique deserunt porro quam!</p>
        </div>
      </article>


      <article class="services">
        <div class="service-icon">
          <span>
            <i class="fas fa-door-closed"></i>
          </span>

        </div>
        <div class="service-content">
          <p class="tall-size strong"><strong>CHAMBRE SECURISE</strong></p></br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis voluptate exercitationem nesciunt quia quaerat consectetur, a dolor pariatur unde praesentium necessitatibus. Deleniti ipsam alias distinctio similique deserunt porro quam!</p>


        </div>
      </article>

      <article class="services">
        <div class="service-icon">
          <span>
            <i class="fa-sharp fa-solid fa-spa"></i>
          </span>

        </div>
        <div class="service-content">
          <p class="tall-size strong"><strong>SPA</strong></p></br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis voluptate exercitationem nesciunt quia quaerat consectetur, a dolor pariatur unde praesentium necessitatibus. Deleniti ipsam alias distinctio similique deserunt porro quam!</p>

        </div>
      </article>


    </div>
    <h3 class="formBloc"><strong>Réservation</strong></h3>
    <?php if (isset($_SESSION["isLogin"])) : ?>
      <form action="../reservationBack/sendDateReservation.php" method="POST">
        <div class="box">

          <div class="formBloc">

            <div class="formGroupe">
              <input type="date" name="datedepart" value="Date de Départ ?" required><br />
            </div>

            <div class="formGroupe">
              <input type="date" name="datefin" value="Fin de Séjour ?" required><br />
            </div>

            <div class="formGroupe">
              <input type="number" name="Nombre_Adulte" placeholder="Nombre Adulte(s) ?" required><br />
            </div>

            <div class="formGroupe">
              <input type="number" name="Nombre_Enfant" placeholder="Nombre Enfants(s) ?" required><br />
            </div>
            <div class="formGroupe">
              <input type="submit" name="Réservation" value="Réservation" class="buttonSub"><br />
            </div>

            <?php if (isset($_SESSION["MsgUser"])) : ?>
              <div class="formGroupe msg">
                <p><?php echo $_SESSION["MsgUser"]; ?></p>
              </div>
            <?php endif; ?>
      </form>
    <?php else : echo '<a class="cta" href="../auth/connexion.php"><button class="bouton"  style="padding: 5px;">Connexion</button></a>';
    endif; ?>
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