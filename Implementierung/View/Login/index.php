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
        <a href="#" class="brand-logo left">Maxxwell Computers</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../main/index.html">Start</a></li>
          <li><a href="../.html">Kontakt</a></li>
          <li><a href="collapsible.html">Login</a></li>
          <li><a href="collapsible.html">Registrieren</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <div id="login-container">
      <img id="login-logo" src="../../Ressourcen/logo.png"></img>
      <div class="row">

        <form class="col s12" method="post" action="../../Controller/Login.php">
          <div class="row">
            <div class="input-field col s12">
              <input id="username" name="username" type="text" class="validate">
              <label for="username">E-mail oder Benutzername</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Passwort</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <button class="btn waves-effect waves-light loginBTN" id="buttonSend" type="submit" name="action">Login
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>

        </form>
      </div>
    </div>

  </body>
</html>
