<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "portfolio";

$connessione = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if($connessione->connect_error){
  die("errore di connessione database: " . $connessione->connect_error);
}

  $estrazione_tabelle = mysqli_query($connessione, "SELECT titolo, img, descrizione, tech FROM blog_portfolio");
  if(!$estrazione_tabelle){
    mysqli_error($connessione);
  }

 ?>
