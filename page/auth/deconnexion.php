<?php
session_start();
session_destroy();
header("location: ../principale/accueil.php");
exit;
