<?php

include('../module/config.php');
$googleClient->revokeToken();

session_destroy();
header('location: /page/login.php');

?>