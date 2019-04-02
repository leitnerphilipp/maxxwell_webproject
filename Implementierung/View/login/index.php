<!DOCTYPE html>
<html>
  <head>
    <title>Maxxwell - Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8"/>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

  <script type="text/javascript" src="js/login.js"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo text-element left">Maxxwell Computers</a>
        <a href="#" data-target="mobile-side" class="sidenav-trigger" style="float : right;"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="text-element" href="../main/index.php">Start</a></li>
          <li><a class="text-element" href="../contact/index.php">Kontakt</a></li>
          <li><a class="text-element" href="../login/index.php">Login</a></li>
          <li><a class="text-element" href="../register/index.php">Registrieren</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-side" style="edge : right;">
      <li><a class="text-element" href="../main/index.php">Start</a></li>
      <li><a class="text-element" href="../contact/index.php">Kontakt</a></li>
      <li><a class="text-element" href="../login/index.php">Login</a></li>
      <li><a class="text-element" href="../register/index.php">Registrieren</a></li>
    </ul>

    <div class="wrapper">
      <div id="login-container">
      <img id="login-logo" src="../img/logo/logo.png" alt="logo" width="150" height="150"></img>
      <div class="row">

        <form class="col s12" method="post" action="../../Controller/Login.php">
          <div class="row">
            <div class="input-field col s12">
              <input id="username" name="username" type="text" class="validate" pattern="[^'\x22]+" required>
              <label for="username">E-mail oder Benutzername</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate" pattern="[^'\x22]+" required>
              <label for="password">Passwort</label>
            </div>
          </div>

          <div class="row">
            <div class="col s6">
              <div class="row forgotLink">
              <a href="reset-password/index.php">Passwort vergessen?</a>
            </div>
            <div class="row registerLink">
              <a href="../register/index.php">Noch nicht regestriert?</a>
            </div>
            </div>
            <div class="col s6 buttonArea">
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
