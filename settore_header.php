<header id="settore_header">

  <div id="contenitore_titolo">
    <div id="home">
      <h1>
        <span class="logo">I</span>
        <span class="logo">S</span>
        <span class="logo">M</span>
        <span class="logo">A</span>
        <span class="logo">I</span>
        <span class="logo">L &nbsp</span>
        <span class="logo">K</span>
        <span class="logo">H</span>
        <span class="logo">A</span>
        <span class="logo">Y</span>
        <span class="logo">A</span>
        <span class="logo">M</span>
      </h1>
      <p>portfolio</p>
    </div>
  </div>

  <div id="contenitore_contatti">
    <div class="contenitore_btn">
        <button class="btn" type="button" name="button" onclick="document.getElementById('gitmodal').style.display='block'"><img class="img_alto" src="./img/github.png" alt="github" id="github" onclick="pop()"></button>
        <div id="gitmodal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="document.getElementById('gitmodal').style.display='none'">&times;</span>
            <h3>Add me on GitHub!</h3>
            <img src="./img/gitq.png" alt="">
            <p>https://github.com/cyla00</p>
          </div>
        </div>

        <button class="btn" type="button" name="button" onclick="document.getElementById('linkmodal').style.display='block'"><img class="img_alto" src="./img/linkedin.png" alt="linkedin" id="linkedin"></button>
        <div id="linkmodal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="document.getElementById('linkmodal').style.display='none'">&times;</span>
            <h3>Add me on Linkedin!</h3>
            <img src="./img/link.png" alt="">
            <p>https://www.linkedin.com/in/ismail-khayam/</p>
          </div>
        </div>

        <button class="btn" type="button" name="button" onclick="document.getElementById('mailmodal').style.display='block'"><img class="img_alto" src="./img/email.png" alt="email" id="email"></button>
        <div id="mailmodal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="document.getElementById('mailmodal').style.display='none'">&times;</span>
            <form class="" action="" method="post">
              <label for="nome">nome</label>
              <input class="mailfrm" type="text" name="nome" value="">
              <label for="mail">e-mail</label>
              <input class="mailfrm" type="text" name="mail" value="">
              <textarea id="mailfrmtxt" name="contenuto" style="resize: none"></textarea>
              <input id="mailinv" type="submit" name="mailfrm_sub" value="invia">
            </form>
          </div>
        </div>

    </div>
  </div>

  <div id="contenitore_utente">
    <div class="cc">
      <div class="utente">
        <form id="login_form" action="login.php" method="post">
          <div class="login_input">
            <input class="style_utente" type="submit" name="login_submit" value="Login">
          </div>
        </form>
      </div>
      <div class="utente">
        <form id="sign_form" action="register.php" method="post">
          <div class="sign_input">
            <input class="style_utente" type="submit" name="sign_submit" value="Register">
          </div>
        </form>
        <form action="index_primario.php" method="post">
          <input class="back" type="submit" name="home" value="H">
        </form>
        <form action="index_inserzione.php" method="post">
          <input class="back" type="submit" name="add" value="+">
        </form>
      </div>
    </div>
  </div>
</header>
