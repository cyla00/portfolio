<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "portfolio";

$connessione = mysqli_connect($hostname, $username, $password, $db);
if($connessione -> connect_error){
  die("errore di connessione database: " . $connessione -> connect_error);
}
 ?>
