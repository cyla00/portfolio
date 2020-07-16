<?php
// connessione database
$host = "localhost:3306";
$user = "root";
$db_pass = "";
$db = "portfolio";
$connessione = mysqli_connect($host, $user, $db_pass, $db) or die ("connessione fallita: " . mysqli_error());
if($connessione){
  echo "connesso. ";
}

if(isset($_POST['invia'])){

  $nome_tabella = "blog_portfolio";

  $id = null;
  $titolo = $_POST['titolo_blog'];
  $immagini = $_FILES['img'];
  $descrizione = $_POST['descrizione'];
  $tecnologie = $_POST['tecnologie'];

  if(!(empty($titolo)) and (empty($immagini)) and (empty($descrizione)) (empty($tecnologie))){
    $push = "INSERT INTO $nome_tabella (id, titolo, immagine, descrizione, tecnologie) VALUES('". $id ."', '". $titolo ."', '". $immagini ."', '". $descrizione ."', '". $tecnologie ."')";
    $verify_push = mysqli_query($push);
    if($verify_push){
      echo "db" . $db . "aggiornato";
    }
    else{
      echo "qualcosa è andato storto al push";
    }
  }
}
 ?>
