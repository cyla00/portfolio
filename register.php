<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
  </head>
  <body>
    <?php
    require("settore_header.php");
     ?>

     <div id="titolo_register">
       <h1>Registrati</h1>
     </div>

    <div id="form_registrazione">
      <?php
      require("codice_registrazione.php");
       ?>

      <div class="vuoto"></div>
        <form id="registrazione" action="register.php" method="post">

          <div id="container_registrazione">
            <div class="reg_inpt" id="reg_nome">
              <label id="label_nome" for="nome">Nome</label>
              <input class="reg_innerform" id="nome" type="text" name="nome" value="" autocomplete="off">
            </div>

            <div class="reg_inpt" id="reg_email">
              <label id="label_email" for="email">Email</label>
              <input class="reg_innerform" id="email" type="text" name="email" value="" autocomplete="off">
            </div>

            <div class="reg_inpt" id="reg_pass">
              <label id="label_password" for="pass">Password</label>
              <input class="reg_innerform" type="password" name="password" value="" autocomplete="off">
            </div>
            <input id="reg_submit" type="submit" name="aggiungi" value="Invia">
            <div>
          </div>

        </form>
      </div>
      <div class="vuoto"></div>
    </div>

  </body>
</html>
