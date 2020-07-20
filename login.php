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

    <div id="contenitore_login">
      <div class="vuoto"></div>

      <div>
        <form id="form_login" action="login.php" method="post">
          <div class="cont_log">
            <label for="user">Username</label>
            <input id="log_user" class="inpt" type="text" name="user" value="">
          </div>
          <div class="cont_log">
            <label for="pass">Password</label>
            <input id="log_pass" class="inpt" type="password" name="pass" value="">
          </div>
          <div class="cont_log">
            <input id="submit_log" type="submit" name="login" value="Login">
          </div>
        </form>
      </div>

      <div class="vuoto"></div>
    </div>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
