<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioIK</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    require("settore_header.php");
     ?>

     <div id="inserzione">
       <div class="vuoto"></div>
       <form action="index_inserzione.php" method="POST" enctype="multipart/form-data">
         <div id="form_inserzione">
           <div id="ins_titolo">
             <label for="titolo_blog">|| Scegli un titolo ||</label>
             <input class="ins_inpt" id="titolo_blog" type="text" name="titolo_blog" value="" autocomplete="off">
           </div>
           <div id="ins_img">
             <label for="immagine">|| Aggiungi un immagine del tuo progetto ||</label>
             <input id="immagine" type='file' name='immagine' autocomplete="off">
           </div>
           <div id="ins_descrizione">
             <label for="descrizione">|| Descrizione ||</label>
             <textarea id="area_descrizione" name="descrizione" rows="8" cols="80" style="resize:none" autocomplete="off"></textarea>
           </div>
           <div id="ins_tecnologie">
             <label for="tecnologie">|| Tecnologie usate in questo progetto ||</label>
             <input class="ins_inpt" id="tecnologie" type="text" name="tecnologie" value="" autocomplete="off">
           </div>
           <div id="ins_submit">
             <input id="ins_invia" type="submit" value="rilascia" name="invia">
           </div>
           <?php
           require("push.php");
            ?>
         </div>
       </form>
       <div class="vuoto"></div>
     </div>

  </body>
</html>
