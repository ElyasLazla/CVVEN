<?php

require "../module/connectDB.php";
/* include('../module/config.php'); */

$loginButton = '';

/* if (!isset($SESSION['access_token'])) {
    $login_button = '<a type="button" class="login-with-google-btn" href="'.$googleClient->createAuthUrl().'">
    Sign in with Google</a>';
}
else{
    header('Location: /index.php');
} */

$msgErr = "false";
$input = "false";
if (!empty($_POST)) {
  extract($_POST);
}

if (isset($_POST["submit1"])) {
  $firstname = htmlentities(trim($firstname));
  $lastname = htmlentities(trim($lastname));
  $username = htmlentities(trim($username));
  $address = htmlentities(trim($address));
  $email = htmlentities(trim($email));
  $phone = htmlentities(trim($phone));
  $mdp1 = htmlentities(trim($mdp1));
  $mdp2 = htmlentities(trim($mdp2));
  
  if (!empty($firstname)) {

    if (!empty($lastname)) {

      if (!empty($username)) {

        if (!empty($email)) {
  
          if (!empty($phone)) {

            if (!empty($address)) {

              if (!empty($mdp1)) {
  
                if (!empty($mdp2)) {
    
                  if ($mdp1 == $mdp2) {
                    
                    $query = $DB->prepare("INSERT INTO client (nom, prenom, adresse, tel, login, email, mdp) VALUES (?, ?, ?, ?, ?, ?, ?);");
                    $query->execute([$firstname, $lastname, $address, $phone, $username, hash("sha256", $mdp2)]);
    
    
                  } else { $msgErr = "Le mot de passe n'est pas conforme."; $input = "password"; }
    
                } else {  $msgErr = "La confirmation du mot de passe n'est pas remplis"; $input = "password2"; }
    
              } else { $msgErr = "Le mot de passe n'est pas remplis"; $input = "password1"; }

            } else { $msgErr = "L'adresse n'est pas remplis"; $input = "address"; }
  
          } else { $msgErr = "Le numéro de téléphone n'est pas remplis"; $input = "phone"; }
  
        } else { $msgErr = "L'email n'est pas remplis"; $input = "email"; }
  
      } else { $msgErr = "Le nom d'utilisateur n'est pas remplis"; $input = "username"; }

    } else { $msgErr = "Le prénom n'est pas remplis"; $input = "lastname"; }

  } else { $msgErr = "Le nom n'est pas remplis"; $input = "firstname"; }
}

?>



<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Authentification </title>
    <link rel="stylesheet" href="./asset/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div class="container">
      <div class="title">Inscription</div>

      <div class="content">

        <form action="" method="post">
          <div class="user-details">

            <div class="input-box">
              <span class="details">Nom</span>

              <?php if ($input == "firstname") { ?>
                <input type="text" placeholder="Entrez votre nom" name="firstname" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="text" placeholder="Entrez votre nom" name="firstname">
              <?php } ?>
            </div>

            <div class="input-box">
              <span class="details">Prénom</span>

              <?php if ($input == "lastname") { ?>
                <input type="text" placeholder="Entrez votre prénom" name="lastname" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="text" placeholder="Entrez votre prénom" name="lastname">
              <?php } ?>
            </div>

            <div class="input-box">
              <span class="details">Nom d'utilisateur</span>

              <?php if ($input == "username") { ?>
                <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username">
              <?php } ?>
            </div>

            <div class="input-box">
              <span class="details">E-mail</span>

              <?php if ($input == "email") { ?>
                <input type="text" placeholder="Entrez votre e-mail" name="email" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="text" placeholder="Entrez votre e-mail" name="email">
              <?php } ?>

            </div>

            <div class="input-box">
              <span class="details">Téléphone</span>

              <?php if ($input == "phone") { ?>
                <input type="text" placeholder="Entrez votre numéro" name="phone" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="text" placeholder="Entrez votre numéro" name="phone">
              <?php } ?>

            </div>

            <div class="input-box">
              <span class="details">Adresse</span>

              <?php if ($input == "address") { ?>
                <input type="text" placeholder="Entrez votre adresse" name="address" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="text" placeholder="Entrez votre adresse" name="address">
              <?php } ?>
            </div>

            <div class="input-box">
              <span class="details">Mot de passe</span>

              <?php if ($input == "password1" || $input == "password") { ?>
                <input type="password" placeholder="Entrez votre mot de passe" name="mdp1" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="password" placeholder="Entrez votre mot de passe" name="mdp1">
              <?php } ?>
            </div>

            <div class="input-box">
              <span class="details">Confirmer le mot de passe</span>

              <?php if ($input == "password2" || $input == "password") { ?>
                <input type="password" placeholder="Confirmez votre mot de passe" name="mdp2" style="border: 3px solid red;">
                <p style="color: red; background: rgba(0, 0, 0, 0.30);"><?php echo $msgErr; ?></p>

              <?php } else { ?>
                <input type="password" placeholder="Confirmez votre mot de passe" name="mdp2">
              <?php } ?>
            </div>

          </div>

          <div class="button">
            <input type="submit" value="Créer mon compte" name="submit1">
          </div>
          <div class="button">
            <a href="login.php">Dejà un compte? Cliquez-ici</a>
<!--             <div class="_contain_btn_Google">
            <?php /* echo $login_button */ ?> 
            </div> -->
          </div>
          
        </form>

      </div>

    </div>

  </body>

</html>
