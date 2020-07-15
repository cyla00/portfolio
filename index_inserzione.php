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
       require("estrax.php");

       if(!empty($_POST["invio"])){
         if($connessione or $connessione->error){
            echo "errore: " . $connessione->error;
            return;
         }


         $elementi_blog = [
           "id" => NULL,
           "titolo" => $_POST['titolo_blog'],
           "file" => $_POST['myfile'],
           "descrizione" => $_POST['descrizione'],
           "tecnologie" => $_POST['tecnologie'],
         ];


         if($elementi_blog and $connessione){
           $push = "INSERT INTO blog_portfolio (id, titolo, img, descrizione, tech) VALUES ($elementi_blog[id], $elementi_blog[titolo], $elementi_blog[file], $elementi_blog[descrizione], $elementi_blog[tecnologie])";

           if($push){
             echo "<p>" . "elemento aggiunto con successo" . "</p>";
           }
           else{
             echo "errore: " . $push->error;
           }
         }
       }
       $connessione->close();
        ?>

       <form class="" action="index_inserzione.php" method="post">

         <p>
           <label for="titolo_blog">choose a title</label>
           <input id="titolo_blog" type="text" name="titolo_blog" value="">
         </p>

         <p>
           <label for="myfile">Select a file:</label>
           <input id="myfile" type="file" name="myfile">
         </p>

         <p>
           <label for="descrizione">choose a description</label>
           <input id="descrizione" type="text" name="descrizione" value="">
         </p>

         <h3 id="titolo_blog_tecnologie">Technologies</h3>

         <p>
           <label for="tecnologie">technology used</label>
           <input id="tecnologie" type="text" name="tecnologie" value="">
         </p>

         <input type="submit" value="Submit" name="invio">
       </form>
     </div>


  </body>
</html>
