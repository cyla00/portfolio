<?php
$estrazione_tabelle = mysqli_query($connessione, "SELECT titolo, img, descrizione, tech FROM blog_portfolio");
if(!$estrazione_tabelle){
  mysqli_error($connessione);
}
 ?>
