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
      <img src="" alt="" class="logo">
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


        <h1>Hôtel<span>Downtown</span></h1>
      </div>

      <div class="main_image">
        <img src="https://th.bing.com/th/id/R.ec845a96a144cfe1c3cd00319a0f09c5?rik=eo3c31ukg%2fFnzg&riu=http%3a%2f%2fwww.hiltonhotels.com%2fassets%2fimg%2fHotel+Images%2fHilton%2fN%2fNYCMLHH%2fNYCMLHH_rooms_full_mayoralsuite.jpg&ehk=QCO9hGDv%2b9h%2bvp4G3b6WCHThDjRS2zsxFE0neX%2bfEb0%3d&risl=&pid=ImgRaw&r=0" alt="">

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
      <button class="btn">Réservez <i class="fa-solid fa-angle-right"></i></button>

    </div>

  </section>


  <div class="slider">
    <div class="slides">

      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">


      <div class="slide first"><img src="https://i.pinimg.com/originals/f0/78/8d/f0788de14143e2edbf78219171a34fd4.png" alt=""></div>

      <div class="slide"><img src="https://th.bing.com/th/id/R.d1e99b55c9b3faba4f50dbd0c1068bc7?rik=gY8dcRPYaWInTA&pid=ImgRaw&r=0" alt=""></div>

      <div class="slide"><img src="https://th.bing.com/th/id/R.d9358e012c0bfe8dcf0c521d103d2fd8?rik=s%2f8nesnuh07j6g&pid=ImgRaw&r=0" alt=""></div>

      <div class="slide"><img src="https://luxurylaunches.com/wp-content/uploads/2020/01/Dinner-Package.jpg" alt=""></div>

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
            <i class="fas fa-broom"></i>
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
          <p class="tall-size strong"><strong>CHAMBRE SECIRISE</strong></p></br>
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
    <form action="../reservationBack/sendDateReservation.php" method="POST">
      <div class="box">

        <div class="formBloc">

          <h3><strong>Réservation</strong></h3>

          <?php if (isset($_SESSION["isLogin"])) : ?>

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

          <?php else : echo '<a class="cta" href="../auth/connexion.php"><button class="bouton"  style="padding: 5px;">Connexion</button></a>';
          endif; ?>
    </form>
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