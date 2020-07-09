<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

      <?php require("settore_slider.php") ?>

    </div>

    <div class="info_slider">
      <div class="vuoto">
      </div>
      <div id="nero">
        <div id="nero_titolo">
          <h3>TITOLO</h3>
        </div>
        <div id="nero_immagini">
          <img class="nero_icona" src="./icons/php.png" alt="">
          <img class="nero_icona" src="./icons/html-5.png" alt="">
          <img class="nero_icona" src="./icons/css.png" alt="">
          <img class="nero_icona" src="./icons/javascript.png" alt="">
        </div>
      </div>
      <div class="vuoto">
      </div>
    </div>

    <?php require("settore_form.php") ?>

  </body>
</html>
