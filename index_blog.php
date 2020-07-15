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
     ?>

     
    <?php
    $estrazione_tabelle = mysqli_query($connessione, "SELECT * FROM blog_portfolio");
    if(!$estrazione_tabelle){
      mysqli_error($connessione);
    }

      while($tabelle = mysqli_fetch_array($estrazione_tabelle)){
        echo "<h1 class=titolo_blog>" . $tabelle['tech'] . "</h1>";
      }


     ?>

  </body>
</html>
