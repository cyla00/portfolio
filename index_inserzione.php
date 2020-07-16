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

       <form class="" action="index_inserzione.php" method="POST" enctype="multipart/form-data">
         <p>
           <label for="titolo_blog">||Scegli un titolo||</label>
           <input id="titolo_blog" type="text" name="titolo_blog" value="">
         </p>
         <p>
           <label for="immagine">||Aggiungi un immagine del tuo progetto||</label>
           <input id="immagine" type='file' name='img'>
         </p>
         <p>
           <label for="descrizione">||Descrizione||</label>
           <textarea id="area_descrizione" name="descrizione" rows="8" cols="80"></textarea>
         </p>
         <p>
           <label for="tecnologie">||Tecnologie usate in questo progetto||</label>
           <input id="tecnologie" type="text" name="tecnologie" value="">
         </p>
         <input type="submit" value="rilascia" name="invia">
         <?php
         require("connex.php");
          ?>
       </form>

     </div>


  </body>
</html>
