<?php

session_start();

$DB_host = "mysql-elyas-lazla.alwaysdata.net";
$DB_user = "291175";
$DB_pass = "StarWars2003?";
$DB_name = "elyas-lazla_cvven";

try {
     $DB = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
     $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $DB;

}catch (PDOException $e){
     echo $e->getMessage();
}
