<?php
/* include('../module/config.php'); */
session_start();
if (isset($_SESSION["isLogin"])) {
    /* $googleClient->revokeToken(); */
    session_destroy();
}
header('location: connexion.php');
