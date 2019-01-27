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

  <script type="text/javascript" src="js/register.js"></script>
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

        <form class="col s12" action="../../Controller/Register.php" method="post">
          <div class="row">
            <div class="input-field col s12">
              <input id="username" type="text" class="validate" name="username">
              <label for="username">Benutzername</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email">
              <label for="email">E-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password1" type="password" class="validate" name="password1">
              <label for="password1">Passwort</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password2" type="password" class="validate" onkeyup="validatePasswords(); return false;" name="password2">
              <label for="password2">Passwort wiederholen</label>
            </div>
          </div>

          <div class="row confirm">
            <span id="confirmMessage" class="confirmMessage"></span>
          </div>

          <div class="row">
            <div class="col s6 acceptAGB">
              <p>
                <label>
                  <input id="indeterminate-checkbox" type="checkbox"/>
                  <span>AGB aktzeptieren</span>
                </label>
              </p>
            </div>
            <div class="col s6 registerBTN">
              <button class="btn waves-effect waves-light disabled" id="buttonSend" type="submit" name="action">Registrieren
                <i class="material-icons right">send</i>
              </button>
            </div>
        </div>

        </form>
      </div>
    </div>

  </body>
</html>
