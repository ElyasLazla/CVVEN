<?php
session_start();
$servername = "mysql-elyas-lazla.alwaysdata.net";
$username = "291175";
$password = "StarWars2003?";
$dbname = "elyas-lazla_cvven";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['Réservation'])) {
    var_dump($_SESSION);
    $dateStart = $_POST["datedepart"];
    $dateEnd = $_POST["datefin"];
    $nb_adult = $_POST["Nombre_Adulte"];
    $nb_enfant = $_POST["Nombre_Enfant"];

    $stmt = $conn->prepare("INSERT INTO Réservation(id_client, dateStart, dateEnd, nb_adult, nb_enfant) 
    VALUES ((SELECT id_client FROM Client WHERE email= :email), :dateStart, :dateEnd, :nb_adult, :nb_enfant)");

    $stmt->bindParam(":email", $_SESSION["email"]);
    $stmt->bindParam(":dateStart", $dateStart);
    $stmt->bindParam(":dateEnd", $dateEnd);
    $stmt->bindParam(":nb_adult", $nb_adult);
    $stmt->bindParam(":nb_enfant", $nb_enfant);
    $stmt->execute();

    printf("tout est ok");
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
            <th>Départ Séjour ?</th>
            <th>Fin Séjour ?</th>
            <th>Nombre Adulte(s) ?</th>
            <th>Nombre Enfant(s) ?</th>
            </tr>


        </thead>
        <tbody>
            <?php $getDATA = $conn->query('SELECT * from Réservation');
            while ($row = $getDATA->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>

                    <td class="infoUser"><?php echo htmlspecialchars($row['dateStart']); ?></td>


                    <td class="infoUser"><?php echo htmlspecialchars($row['dateEnd']); ?></td>


                    <td class="infoUser"><?php echo htmlspecialchars($row['nb_adult']); ?></td>


                    <td class="infoUser"><?php echo htmlspecialchars($row['nb_enfant']); ?></td>

                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</body>

</html>