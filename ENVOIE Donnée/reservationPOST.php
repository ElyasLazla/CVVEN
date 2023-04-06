<?php
 
 $servername = "mysql-elyas-lazla.alwaysdata.net";
 $username = "291175";
 $password= "StarWars2003?";
 $dbname = "elyas-lazla_cvven";
 
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
 $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if (isset($_POST['Réservation']))
 {
     var_dump($_POST);


     $sql = "INSERT INTO `Réservation`(`dateStart`, `dateEnd`, `nb_adult`, `nb_enfant`) 
             VALUES (:dateStart, :dateEnd, :nb_adult, :nb_enfant)";
     $stmt = $conn -> prepare($sql);

     $stmt -> bindParam(":dateStart", $dateStart) ?? 0;
     $stmt -> bindParam(":dateEnd", $dateEnd) ?? 0;
     $stmt -> bindParam(":nb_adult", $nb_adult) ?? 0;
     $stmt -> bindParam(":nb_enfant", $nb_enfant) ?? 0;
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
                <th>Départ Séjour ?</th>
                <th>Fin Séjour ?</th>
                <th>Nombre Adulte(s) ?</th>
                <th>Nombre Enfant(s) ?</th>   
            </tr>


        </thead>
        <tbody>
            <?php $getDATA = $conn->query('SELECT * from Réservation'); while ($row= $getDATA->fetch(PDO::FETCH_ASSOC)):?>
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