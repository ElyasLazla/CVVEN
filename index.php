<?php
session_start();
if ($_SESSION["isLogin"]) {
    echo "connection ok";
    /*         header("location:/acceuil.php"); */
} else {
    header("location: page/connexion.php");
}
