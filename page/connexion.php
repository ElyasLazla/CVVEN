<?php
require "../module/connectDB.php";

if (isset($_SESSION["isLogin"])) {
  header("location: acceuil.php");
}

$messageErrUser = 0;
if (isset($_POST['Connexion'])) {
  $login = $_POST["login"];

  if (filter_var($login, FILTER_VALIDATE_EMAIL)) {

    try {
      $query = $DB->prepare("SELECT login, isAdmin, mdp FROM Client WHERE email = ?");
      $query->execute([$login]);
    } catch (PDOException $err) {
      $msgErrConsole = $err;
    }
  } elseif (strlen($login) == 10) {

    try {
      $query = $DB->prepare("SELECT login, isAdmin, mdp FROM Client WHERE tel = ?");
      $query->execute([$login]);
    } catch (PDOException $err) {
      $msgErrConsole = $err;
    }
  } else {

    try {
      $query = $DB->prepare("SELECT login, isAdmin, mdp FROM Client WHERE login = ?");
      $query->execute([$login]);
    } catch (PDOException $err) {
      $msgErrConsole = $err;
    }
  }

  $user = $query->fetch();

  if ($user && hash("sha256", $_POST['password']) == $user['mdp']) {

    $_SESSION["isLogin"] = true;
    $_SESSION["admin"] = $user["isAdmin"];
    $_SESSION["login"] = $user["login"];
    header("location: acceuil.php");
    $messageErrUser = "connected";
  } else $messageErrUser = "Identifiant invalid!";
}

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Login </title>
  <link rel="icon" href="./asset/img/CVVEN.ico" type="image/icon type">
  <link rel="stylesheet" href="./asset/style/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php
  if (isset($msgErrConsole)) : ?>
    <script>
      console.log(`<?php echo $msgErrConsole ?>`);
    </script>
  <?php endif; ?>

  <div class="content">
    <header>Connectez-vous</header>
    <form action="" method="post">

      <div class="field">
        <span class="fa fa-user"></span>
        <input id="login" type="text" placeholder="Email or Phone" name="login" required>
      </div>

      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" class="password" placeholder="Password" name="password" required>

      </div>
      <!--       <div class="pass">
        <a href="motdepasse.html">Mot de passe oublié?</a>
      </div> -->

      <div class="field">
        <input type="submit" value="Connexion" name="Connexion">
      </div>

      <div class="signup">Pas de compte?
        <a href="inscription.php">Inscrivez-vous</a>
      </div>
      <div class='error'>
        <?php
        if ($messageErrUser) printf($messageErrUser);
        ?>
      </div>

    </form>
  </div>

  <script>
    window.onfocus = function() {
      document.title = "Login";
    };

    window.onblur = function() {
      document.title = "Pouquois tu nous quitte ? :(";
    };
  </script>
</body>

</html>