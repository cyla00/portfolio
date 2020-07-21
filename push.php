
<?php

require("connex.php");

if(isset($_POST['invia'])){

  $titolo = $_POST['titolo_blog'];
  $descrizione = $_POST['descrizione'];
  $tecnologie = $_POST['tecnologie'];

  $file = $_FILES['immagine'];
  $fileName = $_FILES['immagine']['name'];
  $fileType = $_FILES['immagine']['type'];
  $fileDirectory = $_FILES['immagine']['tmp_name'];
  $fileSize = $_FILES['immagine']['size'];

  $esplosione_img = explode('.', $fileName);
  $estensione_img = strtolower(end($esplosione_img));
  $consentiti = ['jpg', 'jpeg', 'png', 'gif'];


  if(!empty($file) and in_array($estensione_img, $consentiti) and $fileSize < 1000000){

    $forma_img = "projects/" . $fileName;
    $push = "INSERT INTO blog_portfolio (id, titolo, img, descrizione, tecnologie) VALUES (null, '$titolo', '$forma_img', '$descrizione', '$tecnologie')";

    if($connessione->query($push) === TRUE){
      $message = "push riuscito in: " . $db;
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
    else{
      $message = "!!ERRORE PUSH: " . $connessione->error;
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
  }
  else{
    $message = "!NESSUNA IMMAGINE SELEZIONATA o immagine non supportata";
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
  }
}

$connessione->close();
 ?>
