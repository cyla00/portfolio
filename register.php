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


    <div class="form_registrazione">
      <?php
      $db = "login";
      require("connex.php");

      if(isset($_POST['aggiungi'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $negazioni_nome = preg_match('/[^a-zA-Z\d]/', $nome);
        $negazione_password = strlen($password) < 7;


        if($negazioni_nome){
          $message = "!username non valido";
          echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }
        else if($negazione_password){
          $message = "!password troppo corta";
          echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }
        else{
          $push = "INSERT INTO login (id, user, email, pass) VALUES (null, '$nome', '$email', '$password')";

          if($connessione->query($push) === TRUE){
            $message = "Registrazione completata";
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
          }
          else{
            $message = "Registrazione fallita, é sorto qualche problema" . $connessione->error;
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
          }

          $connessione->close();
        }
      };
       ?>
      <form class="registrazione" action="register.php" method="post">
        <p>
          <label for="nome">Nome</label>
          <input type="text" name="nome" value="">
        </p>

        <p>
          <label for="email">Email</label>
          <input type="text" name="email" value="">
        </p>

        <p>
          <label for="pass">Password</label>
          <input type="text" name="password" value="">
        </p>
        <input type="submit" name="aggiungi" value="Registrati">
        <p>

        </p>
      </form>
    </div>

  </body>
</html>
