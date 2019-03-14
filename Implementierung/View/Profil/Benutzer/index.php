<?php
 session_start();

 require_once '../../../Model/Database_Operations.php';
 require_once '../../../Controller/UserInfos.php';

 if (!isset($_SESSION['name'])) {
  die('<script>alert("Bitte zuerst einloggen!");window.location.href = "../View/login/index.php";</script>');
}
$assignmentsquery = $pdo->prepare(getAssignmentStatusByUsername($_SESSION['name']));
$assignmentsquery->execute();
$assignments = $assignmentsquery->fetchAll();

if ($assignments == null) {
  $assignment_status = "Kein Auftrag";
}

foreach ($assignments as $row) {
  $assignment_status = $row['Status'];
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Maxxwell - Profil</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
  <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8"/>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

  <script type="text/javascript" src="js/benutzer-profil.js"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo text-element left">Maxxwell Computers</a>
        <a href="#" data-target="mobile-side" class="sidenav-trigger" style="float : right;"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="text-element" href="../../main/index.php">Start</a></li>
          <li><a class="text-element" href="../../contact/index.php">Kontakt</a></li>
          <li class="active"><a class="text-element" href="">Profil</a></li>
          <li><a class="text-element" href="../../../Controller/Logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-side" style="edge : right;">
      <li><a class="text-element" href="../../main/index.php">Start</a></li>
      <li><a class="text-element" href="../../contact/index.php">Kontakt</a></li>
      <li class="active"><a class="text-element" href="">Profil</a></li>
      <li><a class="text-element" href="../../../Controller/Logout.php">Logout</a></li>
    </ul>

    <div class="wrapper">

      <form  action="../../../Controller/UserProfile.php" method="post">
      <div class="profilcontainer">

      <ul class="collapsible">
         <li>
           <div class="collapsible-header"><i class="material-icons">account_box</i>Persönliche Daten</div>
           <div class="collapsible-body">
           <div class="row">
            <div class="col s4">
              <div class="input-field">
                <input id="first-name" type="text" class="validate" name="first-name" pattern="[A-Za-z0-9]+" value="<?php echo htmlspecialchars($firstname); ?>">
                <label for="first-name">Vorname</label>
              </div>
              <div class="input-field">
                <input id="last-name" type="text" class="validate" name="last-name" pattern="[A-Za-z0-9]+" value="<?php echo htmlspecialchars($lastname); ?>">
                <label for="last-name">Nachname</label>
              </div>
              <p>
                    <label>
                      <input name="group1" type="radio" checked value="M"/>
                      <span>Männlich</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input name="group1" type="radio" value="W"/>
                      <span>Weiblich</span>
                    </label>
                  </p>
            <break>
            <p>Geburtstag</p>
            <input type="date" class="datepicker" name="date" value="<?php echo htmlspecialchars($date); ?>"/>
            <div class="input-field">
              <input id="company" type="text" class="validate" name="company" pattern="[^'\x22]+" value="<?php echo htmlspecialchars($company); ?>">
              <label for="company">Firma/Unternehmen</label>
            </div>
            <div class="input-field">
              <textarea id="description" class="materialize-textarea" name="short-description" pattern="[^'\x22]+" value="<?php echo htmlspecialchars($description); ?>"></textarea>
              <label for="description">Kurze Selbstbeschreibung</label>
            </div>
            </div>
            <div class="col s4">
              <div class="input-field">
                <input id="street" type="text" class="validate" name="street" pattern="[^'\x22]+" value="<?php echo htmlspecialchars($street); ?>">
                <label for="street">Straße</label>
              </div>
              <div class="input-field">
                <input id="number" type="text" class="validate" name="number" pattern="[A-Za-z0-9]+" value="<?php echo htmlspecialchars($number); ?>">
                <label for="number">Hausnummer</label>
              </div>
              <div class="input-field">
                <input id="postalcode" type="text" class="validate" name="postalcode" pattern="[0-9]+" value="<?php echo htmlspecialchars($postalcode); ?>">
                <label for="postalcode">Postleitzahl</label>
              </div>
              <div class="input-field">
                <input id="city" type="text" class="validate" name="city" pattern="[A-Za-z0-9]+" value="<?php echo htmlspecialchars($city); ?>">
                <label for="city">Ort</label>
              </div>
              <div class="input-field">
                <input id="country" type="text" class="validate" name="country" pattern="[A-Za-z]+" value="<?php echo htmlspecialchars($country); ?>">
                <label for="country">Land</label>
              </div>
            </div>
            <div class="col s4 final">
              <div class="input-field">
                <input id="homepage" type="text" class="validate" name="homepage" pattern="[^'\x22]+" value="<?php echo htmlspecialchars($homepage); ?>">
                <label for="homepage">Homepage</label>
              </div>
              <div class="input-field">
                <input id="telephone" type="text" class="validate" name="telephone" pattern="[^'@\x22]+" value="<?php echo htmlspecialchars($telephone); ?>">
                <label for="telephone">Telefonnummer</label>
              </div>
              <div class="input-field">
                <input id="fax" type="text" class="validate" name="fax" pattern="[^'@\x22]+" value="<?php echo htmlspecialchars($fax); ?>">
                <label for="fax">Fax</label>
                <button class="btn waves-effect waves-light savePersonal btnChange" id="savePersonal" type="submit" name="action1">Speichern
                </button>
              </div>
            </div>
          </div>
           </div>
         </li>
         <li>
           <div class="collapsible-header"><i class="material-icons">settings_application</i>Account verwalten</div>
           <div class="collapsible-body">

                <div class="row">

                  <div class="col s4">
                  <div class="input-field">
                    <input id="old_psw" type="password" class="validate" name="old_psw" pattern="[^'\x22]+">
                    <label for="old_psw">Altes Passwort</label>
                  </div>
                  <div class="input-field">
                    <input id="psw1" type="password" class="validate" name="psw1" pattern="[^'\x22]+">
                    <label for="psw1">Neues Passwort</label>
                  </div>
                  <div class="input-field">
                    <input id="psw2" type="password" class="validate" name="psw2" pattern="[^'\x22]+">
                    <label for="psw2">Passwort wiederholen</label>
                  </div>
                   <button class="btn waves-effect waves-light btnChange" id="changePassword" type="submit" name="action2">Passwort ändern
                   </button>
                </div>
                <div class="col s4">
                    <div class="input-field">
                      <input id="old_email" type="text" class="validate" name="old_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                      <label for="old_email">Alte E-Mail-Addresse</label>
                    </div>
                    <div class="input-field">
                      <input id="email1" type="text" class="validate" name="email1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                      <label for="email1">Neue E-Mail-Addresse</label>
                    </div>
                    <div class="input-field">
                      <input id="email2" type="password" class="validate" name="email2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                      <label for="email2">E-Mail-Adresse wiederholen</label>
                    </div>
                    <button class="btn waves-effect waves-light btnChange" id="changeEmail" type="submit" name="action3">E-Mail-Adresse ändern
                    </button>
                </div>
                <div class="col s4">
                  <button class="btn waves-effect waves-light deleteAccount btnChange" id="deleteAccount" type="submit" name="action4">Account löschen
                  </button>
                </div>
                </div>


           </div>
         </li>
         <li>
           <div class="collapsible-header"><i class="material-icons">assignment</i>Aufträge</div>
           <div class="collapsible-body">
             <span>Auftragsstatus: <span id="currentState"><?php echo htmlspecialchars($assignment_status); ?></span> </span>

             <a class="waves-effect waves-light btn modal-trigger" href="#modalCreate">Erstellen</a>

             <div id="modalCreate" class="modal">
               <div class="modal-content">
                 <h4>Auftrag erstellen</h4>
                 <div class="input-field">
                   <input id="ass_title" type="text" class="validate" name="ass_title" pattern="[A-Za-z0-9]+">
                   <label for="ass_title">Auftragtitel</label>
                 </div>
                 <div class="input-field">
                   <textarea id="ass_description" class="materialize-textarea" name="ass_desc"></textarea>
                   <label for="ass_description">Auftragsbeschreibung (so ausführlich wie möglich)</label>
                 </div>
                 <button class="btn waves-effect waves-light createAssignment btnChange" id="createAssignment" type="submit" name="action5">Erstellen
                 </button>
               </div>
             </div>

           </div>
         </li>
         <li>
          <div class="collapsible-header"><i class="material-icons">face</i>Administrator kontaktieren</div>
          <div class="collapsible-body">
            <span id="Admin_Email">Email des Administrator</span>
            <button class="btn waves-effect waves-light sendEmail btnChange" id="sendEmail" name="sendEmail" onclick="location.href='mailto:webmaster1@nerdmania.at'">Email senden</button>
          </div>

       </li>
       </ul>

     </div>
   </form>
  </body>
</html>
