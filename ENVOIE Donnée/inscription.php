<?php

    $servername = "185.31.40.32";
    $username = "tnp-phan";
    $password= "phan)nhung140703";
    $dbname = "tnp-phan_airbnblocation";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    }
    catch(PDOException $e){
        echo "La connexion a echoue : " . $e ->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        input {
          width: 100%;
          padding: 10px;
          margin: 5px;
          outline: none;
        }
        input::placeholder {
          color: #000000;
          opacity: 1;
        }
        input:placeholder-shown {
          border: 1px solid #000000;
        }
      </style>

    <body style="background-color:#000000;">
    </body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>   
    <link rel="stylesheet" href="PourIndex.css"   

</head>

<body>


<form action="inscriptionPOST.php" method = "POST">
    <div class="box">

        <div class="formBloc">

            <h3><strong>Inscription</strong></h3>
            
            <div class="formGroupe">
                <input type = "utilisateur" name = "id" id = "id" placeholder="Pseudo" required> <br/>
            </div>

            <div class="formGroupe">
                <input type = "text" name = "nom" placeholder="Nom" required><br/> 
            </div>

            <div class="formGroupe">
                <input type = "text" name = "prenom" placeholder="Prénom" required><br/> 
            </div>

            <div class="formGroupe">
                <input type = "email" name = "email" placeholder="Adresse Mail" required ><br/> 
            </div>

            <div class="formGroupe">
                <input type = "tel" name = "phone" placeholder="Numéro" required><br/> 
            </div>

            <div class="formGroupe">
                <input type = "text" name = "adresse" placeholder="Adresse" required><br/> 
            </div>

            <div class="formGroupe">
                <input type = "password" name = "motdepasse" placeholder="Mot De Passe" required><br/> 
            </div>

            <div class="formGroupe">
                <input type = "submit" name="send" value="LOGIN" class = "buttonSub"><br/>  
            </div>   
    </form>
<style>

*, ::before, ::after
{
    box-sizing: border-box;
    padding: 0%;
    margin: 0%;
}

body 
{
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-image: url("https://www.maisonsclairlogis.fr/wp-content/uploads/maison-en-l-lachat_enduit-g50.jpg");
    background-size: contain;
    background-repeat: no-repeat;
    background-size: cover;
    height: 80vh
    
}

.box 
{
    width: 500px;
    height: auto;
    padding: 25px;
    color: rgb(0, 0, 0);
    border-radius: 3px;
}

.box h3 strong 
{
    color: rgb(0, 0, 0);
    font-weight: 900;
}

.formBloc h3
{
    color: rgb(0, 0, 0);
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 45px;
}

.formBloc .formGroup 
{
    position: relative;
    display: flex;
    margin-bottom: 40px;
}

.formBloc .formGroupe label
{
    position: absolute;
    top: 50%;
    left: 0%;
    transform: translateY(-50%);
    color:rgb(0, 0, 0) ;
    font-size: 20%;
    transition: 0.4s ease-out;
}

.formBloc .formGroupe input 
{
    display: block;
    width: 100%;
    padding: 10px 0px;
    border: none;
    outline: none;
    background: none;
    border-bottom: 3px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    font-size: 20px;
    transition: 0.4s ease-out;
}

.formGroupe:nth-child(8)
{
    margin-bottom: 65px;
    justify-content: center;
}

.formBloc .formGroupe .buttonSub
{
    display: block;
    width: auto;
    padding: 15px 60px;
    border: 3px solid rgb(0, 0, 0);
    border-radius: 999px;
    background-image: linear-gradient (to left, transparent 50%, #5260ad 50%, #8b97d7);
    background-size: 24px;
    font-weight: 500;
    cursor: pointer;
}

.formBloc .formGroupe .buttonSub:hover
{
    color: rgb(0, 0, 0);
    background-position: 100%;
    border: 3px, solid rgb(0, 0, 0);
} 
</style>

</body>
</html>
