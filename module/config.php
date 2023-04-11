<?php

require_once 'googleAPI/vendor/autoload.php';
$googleClient = new Google_Client();
$googleClient->setClientId("588187523074-7jspfjo9s8584pm10qqrsufsq5q9l046.apps.googleusercontent.com");
$googleClient->setClientSecret("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");
$googleClient->setRedirectUri("http://localhost:1988/page/redirect.php");
$googleClient->addScope("email");
$googleClient->addScope("profile");

?>