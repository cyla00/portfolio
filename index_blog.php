<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>blog</title>
  </head>
  <body>
    <?php
    require("settore_header.php");
    require("connex.php");

    $curid = get_queried_object_id();
    $pull = $connessione->query("SELECT * FROM blog_portfolio WHERE id=$curid");

    while($row = $pull->fetch_assoc()){
      echo "<div id='blog_wrap'>";
      print_r ($row);
      echo "</div>";
    }
     ?>

  </body>
</html>
