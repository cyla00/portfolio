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
    require("connex.php");

    $titolo = $_REQUEST ['titolo_blog'];
    $file = $_REQUEST['myfile'];
    $descrizione = $_REQUEST['descrizione'];
    $tecnologie = $_REQUEST['tecnologie'];

    $push = "INSERT INTO blog_portfolio(titolo, img, descrizione, tecnologie) VALUES ('$titolo, $file, $descrizione, $tecnologie')";

    if(mysqli_query($connessione, $push)){
      echo "push riuscito";
    }
    else{
      echo "errore" . mysqli_error($connessione);
    }
     ?>

     <div class="form_inserzione">
       <form class="" action="index_inserzione.php" method="get">
         <label for="titolo_blog">choose a title</label>
         <input id="titolo_blog" type="text" name="titolo_blog" value="">

         <label for="myfile">Select a file:</label>
         <input id="myfile" type="file" name="myfile">

         <label for="descrizione">choose a description</label>
         <input id="descrizione" type="text" name="descrizione" value="">

         <h3 id="titolo_blog_tecnologie">Technologies</h3>

         <label for="tecnologie">technology used</label>
         <input id="tecnologie" type="text" name="tecnologie" value="">

         <input type="submit" value="Submit">
       </form>


     </div>


  </body>
</html>
