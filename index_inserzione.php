<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioIK</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


     <div class="form_inserzione">
       <?php
       require("connex.php");

       if(isset($_POST["carica"])){

         $elementi_blog = [
           "id" => NULL,
           "titolo" => $_POST['titolo_blog'],
           "file" => $_FILES['immagine'],
           "descrizione" => $_POST['descrizione'],
           "tecnologie" => $_POST['tecnologie'],
         ];

          $nomeFile = $_FILES['immagine']['name'];
          $tipoFile = $_FILES['immagine']['type'];
          $grandezzaFile = $_FILES['immagine']['size'];
          $posizioneFile = $_FILES['immagine']['tmp_name'];
          $erroreFile = $_FILES['immagine']['error'];
          $estensioneFile = explode(".", $nomeFile);

         $table = "blog_portfolio";

           if (!$connessione->query("INSERT INTO $table (id, titolo, img, descrizione, tech) VALUES ($elementi_blog[id], $elementi_blog[titolo], $elementi_blog[file], $elementi_blog[descrizione], $elementi_blog[tecnologie])")) {
             echo "Errore della query: " . $connessione->error;
           }else{
             echo "Inserimenti effettuati correttamente.";
           }
           $connessione->close();
         }
        ?>

       <form class="" action="index_inserzione.php" method="POST" enctype="multipart/form-data">

         <p>
           <label for="titolo_blog">||Scegli un titolo||</label>
           <input id="titolo_blog" type="text" name="titolo_blog" value="">
         </p>

         <p>
           <label for="immagine">||Aggiungi un immagine del tuo progetto||</label>
           <input id="immagine" type='file' name='immagine'>
         </p>

         <p>
           <label for="descrizione">||Descrizione||</label>
           <input id="descrizione" type="text" name="descrizione" value="">
         </p>

         <p>
           <label for="tecnologie">||Tecnologie usate in questo progetto||</label>
           <input id="tecnologie" type="text" name="tecnologie" value="">
         </p>

         <input type="submit" value="invia" name="invia">
       </form>
     </div>


  </body>
</html>
