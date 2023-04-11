<?php
require "../../module/connectDB.php";

var_dump($_SESSION["isLogin"]);
if (isset($_POST['Réservation'])) {
    if (!isset($_SESSION["isLogin"])) {
        header("location: ../auth/connexion.php");
    }
    $dateStart = $_POST["datedepart"];
    $dateEnd = $_POST["datefin"];
    $nb_adult = $_POST["Nombre_Adulte"];
    $nb_enfant = $_POST["Nombre_Enfant"];

    $stmt = $DB->prepare("INSERT INTO Réservation(id_client, dateStart, dateEnd, nb_adult, nb_enfant) 
    VALUES ((SELECT id_client FROM Client WHERE login= :login), :dateStart, :dateEnd, :nb_adult, :nb_enfant)");

    try {
        $stmt->bindParam(":login", $_SESSION["login"]);
        $stmt->bindParam(":dateStart", $dateStart);
        $stmt->bindParam(":dateEnd", $dateEnd);
        $stmt->bindParam(":nb_adult", $nb_adult);
        $stmt->bindParam(":nb_enfant", $nb_enfant);
        $stmt->execute();
        $_SESSION["MsgUser"] = "Réservation envoyée.";
        header("location: " . $_SERVER["HTTP_REFERER"]);
    } catch (PDOException $err) {
        $_SESSION["MsgUser"] = "Une erreur est survenue lors de l'envois de la réservation.";
        $_SESSION["MsgConsole"] = "An error for send data in SQL: " . $err;
        header("location: " . $_SERVER["HTTP_REFERER"]);
    }
}
