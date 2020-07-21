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

    <div id="sezione_centrale">
      <div class="vuoto"></div>

      <div id="wrap">
        <?php
        require("connex.php");
        $pull = $connessione->query('SELECT * FROM blog_portfolio ORDER BY id DESC');
        while($row = $pull->fetch_assoc()){
          echo "<div id='primario_wrap'>";
          echo "<h1 id='titolo_primario'>" . $row['titolo'] . "</h1>";
          echo "<img id='img_primario' src='{$row['img']}'>";
          echo "<p id='p_primario'>" . $row['id'] . "</p>";
          echo "<form action='index_blog.php'>";
          echo "<input id='btn_primario' type='submit' name='submit' value='show more'>";
          echo "</form>";
          echo "</div>";
        }
         ?>
      </div>

       <div class="vuoto"></div>
    </div>
<script src="primBlog.js" charset="utf-8"></script>
  </body>
</html>
