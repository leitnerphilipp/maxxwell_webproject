<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
  <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8"/>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

  <script type="text/javascript" src="js/login.js"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left text-element">Maxxwell Computers</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="text-element" href="../../main/index.php">Start</a></li>
          <li><a class="text-element" href="../../contact/index.php">Kontakt</a></li>
          <li><a class="active text-element" href="../../login/index.php">Login</a></li>
          <li><a class="text-element" href="../../register/index.php">Registrieren</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <div id="login-container">
      <img id="login-logo" src="../../img/logo/logo.png" alt="logo" width="150" height="150"></img>
      <h2>Passwort vergessen</h2>
        <form class="col s12" method="post" action="">
          <div class="row rowReset">
            <div class="input-field col s12">
              <input id="username" name="username" type="text" class="validate">
              <label for="username">E-mail oder Benutzername</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p> Kennung per Email anfordern</p>
              <button class="btn waves-effect waves-light sendBTN" id="buttonSend" type="submit" name="action">Senden
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>

      </form>
    </div>

  </body>
</html>
