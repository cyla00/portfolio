<?php
$db = "login";
require("connex.php");

if(isset($_POST['aggiungi'])){

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  $negazioni_nome = preg_match('/[^a-zA-Z\d]/', $nome);
  $negazione_password = strlen($password) < 8;


  if($negazioni_nome){
    $message = "!username non valido";
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
  }
  else if($negazione_password){
    $message = "!password troppo corta";
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
  }
  else{
    $push = "INSERT INTO login (id, user, email, pass) VALUES (null, '$nome', '$email', '$password')";

    if($connessione->query($push) === TRUE){
      $message = "Registrazione completata";
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
    else{
      $message = "Registrazione fallita, é sorto qualche problema" . $connessione->error;
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }

    $connessione->close();
  }
};
 ?>
