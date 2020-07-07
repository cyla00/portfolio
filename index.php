<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PortfolioIK</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div id="sezione_alta">

      <?php require("settore_icone.php")?>

      <div id="paragrafo_centrale">
        <h1>Hi! im a web developer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
      </div>

      <?php require("settore_nome.php") ?>

    </div>

    <div id="sezione_centrale">
      <div class="container_bottone">
        <div class="btn">
          <button class="bottone" id="bottone_dietro" type="dietro" name="button"><img class="immagine_bottone" src="./img/left.png" alt="bottoneDietro"></button>
        </div>
      </div>
      <div class="immagine_laptop">
        <img id="laptop" src="./img/laptop.png" alt="laptop">
      </div>
      <div class="container_bottone">
        <div class="btn">
          <button class="bottone" id="bottone_avanti" type="dietro" name="button"><img class="immagine_bottone" src="./img/right.png" alt="bottoneAvanti"></button>
        </div>
      </div>
    </div>




  </body>
</html>
