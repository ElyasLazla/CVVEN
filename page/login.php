<?php
require "./module/connectDB.php";
$messageError = 0;
if (isset($_POST['Connexion'])) {

  $query = $DB->prepare("SELECT * FROM Client WHERE login = ? AND mdp = ?");
  $query->execute([$_POST['login'], hash("sha256", $_POST['password'])]);
  $user = $query->fetch();
  if ($user && hash("sha256", $_POST['password']) == $user['mdp']) header("location:home.php");
  else $messageError = "Identifiant invalid!";
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Login </title>
  <link rel="stylesheet" href="./asset/style/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="content">
    <header>Connectez-vous</header>
    <form action="" method="post">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" placeholder="Email or Phone" name="login" required>
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" class="password" placeholder="Password" name="password" required>

      </div>
      <div class="pass">
        <a href="motdepasse.html">Mot de passe oublié?</a>
      </div>
      <div class="field">
        <input type="submit" value="Connexion" name="Connexion">
      </div>
      <div class="signup">Pas de compte?
        <a href="inscription.html">Inscrivez-vous</a>
      </div>
      <div class='error'>
      <?php
        if ($messageError) printf($messageError);
      ?>
      </div>
    </form>
  </div>

</body>

</html>
