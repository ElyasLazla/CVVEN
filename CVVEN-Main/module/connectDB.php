<?php

session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "cvven";


try {
     $DB = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
     $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $DB;

}catch (PDOException $e){
     echo $e->getMessage();
}
