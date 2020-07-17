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
     
    <?php
    require('connex.php');

    if(isset($_POST['login'])){

    }
     ?>
    <header>
      <form class="" action="login.php" method="post">
        <p>
          <label for="user">Username</label>
          <input  id="user" type="text" name="user" value="">
        </p>
        <p>
          <label for="pass">Password</label>
          <input  id="pass" type="text" name="pass" value="">
        </p>
        <p>
          <input type="submit" name="login" value="Login">
        </p>
      </form>
    </header>
  </body>
</html>
