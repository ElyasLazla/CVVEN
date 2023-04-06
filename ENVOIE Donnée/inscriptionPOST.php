<?php
 
    $servername = "185.31.40.32";
    $username = "tnp-phan";
    $password= "phan)nhung140703";
    $dbname = "tnp-phan_airbnblocation";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['send']))
    {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $motdepasse = $_POST['motdepasse'];
        $adresse = $_POST['adresse'];


        $sql = "INSERT INTO `client`(`id`, `nom`, `prenom`, `email`, `phone`, `motdepasse`, `adresse`, datecreation, datemodification) 
                VALUES (:id, :nom, :prenom, :email, :phone, :motdepasse, :adresse, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
        $stmt = $conn -> prepare($sql);

        $stmt -> bindParam(":id", $id);
        $stmt -> bindParam(":nom", $nom);
        $stmt -> bindParam(":prenom", $prenom);
        $stmt -> bindParam(":email", $email);
        $stmt -> bindParam(":phone", $phone);
        $stmt -> bindParam(":motdepasse", $motdepasse);
        $stmt -> bindParam(":adresse", $adresse);
        $stmt->execute();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <table class="customersTable">
        <thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Numero</th>
                <th>Adresse</th> 
                <th>Mot de Passe</th>
                <th>Date de création</th>
                <th>Date de modification</th>      
            </tr>


        </thead>
        <tbody>
            <?php $getDATA = $conn->query('SELECT * from client'); while ($row= $getDATA->fetch(PDO::FETCH_ASSOC)):?>
            
            <tr>

                <td class="infoUser"><?php echo htmlspecialchars($row['nom']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['prenom']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['email']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['phone']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['adresse']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['motdepasse']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['datecreation']); ?></td>


                <td class="infoUser"><?php echo htmlspecialchars($row['datemodification']); ?></td>
            </tr>
            <?php 
                endwhile;
            ?>
        </tbody>
    </table>
</body>
</html>