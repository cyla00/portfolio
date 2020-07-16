<?php
// connessione database
$host = "localhost:3306";
$user = "root";
$db_pass = "";
$db = "portfolio";

$connessione = new mysqli($host, $user, $db_pass, $db);
if($connessione->connect_error){
  die("connessione fallita" . $connessione->connect_error);
}
 ?>
