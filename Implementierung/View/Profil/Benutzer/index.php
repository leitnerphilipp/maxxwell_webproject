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

  <script type="text/javascript" src="js/benutzer-profil.js"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../main/index.html">Start</a></li>
          <li><a href="../.html">Kontakt</a></li>
          <li class="active"><a href="collapsible.html">Profil</a></li>
          <li><a href="collapsible.html">Logout</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">

      <form>
      <div class="profilcontainer">

      <ul class="collapsible">
         <li>
           <div class="collapsible-header"><i class="material-icons">account_box</i>Persönliche Daten</div>
           <div class="collapsible-body">
           <div class="row">
            <div class="col s4">
              <div class="input-field">
                <input id="first-name" type="text" class="validate" name="first-name">
                <label for="first-name">Vorname</label>
              </div>
              <div class="input-field">
                <input id="last-name" type="text" class="validate" name="last-name">
                <label for="last-name">Nachname</label>
              </div>
              <p>
                    <label>
                      <input name="group1" type="radio" checked />
                      <span>Männlich</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input name="group1" type="radio" />
                      <span>Weiblich</span>
                    </label>
                  </p>
            <break>
            <p>Geburtstag</p>
            <input type="date" class="datepicker"/>
            <div class="input-field">
              <input id="company" type="text" class="validate" name="company">
              <label for="company">Firma/Unternehmen</label>
            </div>
            <div class="input-field">
              <textarea id="description" class="materialize-textarea"></textarea>
              <label for="description">Kurze Selbstbeschreibung</label>
            </div>
            </div>
            <div class="col s4">
              <div class="input-field">
                <input id="street" type="text" class="validate" name="street">
                <label for="street">Straße</label>
              </div>
              <div class="input-field">
                <input id="number" type="text" class="validate" name="number">
                <label for="number">Hausnummer</label>
              </div>
              <div class="input-field">
                <input id="postalcode" type="text" class="validate" name="postalcode">
                <label for="postalcode">Postleitzahl</label>
              </div>
              <div class="input-field">
                <input id="city" type="text" class="validate" name="city">
                <label for="city">Ort</label>
              </div>
              <div class="input-field">
                <input id="country" type="text" class="validate" name="country">
                <label for="country">Land</label>
              </div>
            </div>
            <div class="col s4 final">
              <div class="input-field">
                <input id="homepage" type="text" class="validate" name="homepage">
                <label for="homepage">Homepage</label>
              </div>
              <div class="input-field">
                <input id="telephone" type="text" class="validate" name="telephone">
                <label for="telephone">Telefonnummer</label>
              </div>
              <div class="input-field">
                <input id="fax" type="text" class="validate" name="fax">
                <label for="fax">Fax</label>
                <button class="btn waves-effect waves-light savePersonal" id="savePersonal" type="submit" name="action">Speichern
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
                    <form>
                  <div class="input-field">
                    <input id="old_psw" type="password" class="validate" name="old_psw">
                    <label for="old_psw">Altes Passwort</label>
                  </div>
                  <div class="input-field">
                    <input id="psw1" type="password" class="validate" name="psw1">
                    <label for="psw1">Neues Passwort</label>
                  </div>
                  <div class="input-field">
                    <input id="psw2" type="password" class="validate" name="psw2">
                    <label for="psw2">Passwort wiederholen</label>
                  </div>
                   <button class="btn waves-effect waves-light" id="changePassword" type="submit" name="action">Passwort ändern
                   </button>
                 </form>
                </div>
                <div class="col s4">
                  <form>
                    <div class="input-field">
                      <input id="old_email" type="text" class="validate" name="old_email">
                      <label for="old_email">Alte E-Mail-Addresse</label>
                    </div>
                    <div class="input-field">
                      <input id="email1" type="text" class="validate" name="email1">
                      <label for="email1">Neue E-Mail-Addresse</label>
                    </div>
                    <div class="input-field">
                      <input id="email2" type="password" class="validate" name="email2">
                      <label for="email2">E-Mail-Adresse wiederholen</label>
                    </div>
                    <button class="btn waves-effect waves-light" id="changeEmail" type="submit" name="action">E-Mail-Adresse ändern
                    </button>
                  </form>
                </div>
                <div class="col s4">
                  <form>
                  <button class="btn waves-effect waves-light deleteAccount" id="deleteAccount" type="submit" name="action">Account löschen
                  </button>
                </form>
                </div>
                </div>


           </div>
         </li>
         <li>
           <div class="collapsible-header"><i class="material-icons">assignment</i>Aufträge</div>
           <div class="collapsible-body">
             <span>Auftragsstatus: <span id="currentState"></span> </span>

             <a class="waves-effect waves-light btn modal-trigger" href="#modalCreate">Erstellen</a>

             <div id="modalCreate" class="modal">
               <div class="modal-content">
                 <h4>Auftrag erstellen</h4>
                 <form>
                 <div class="input-field">
                   <input id="ass_title" type="text" class="validate" name="ass_title">
                   <label for="ass_title">Auftragtitel</label>
                 </div>
                 <div class="input-field">
                   <textarea id="ass_description" class="materialize-textarea"></textarea>
                   <label for="ass_description">Auftragsbeschreibung (so ausführlich wie möglich)</label>
                 </div>
                 <button class="btn waves-effect waves-light createAssignment" id="createAssignment" type="submit" name="action">Erstellen
                 </button>
               </form>
               </div>
             </div>

           </div>
         </li>
         <li>
          <div class="collapsible-header"><i class="material-icons">face</i>Administrator kontaktieren</div>
          <div class="collapsible-body">
            <span id="Admin_Email">Email des Administrator</span>
            <button class="btn waves-effect waves-light sendEmail" id="sendEmail">Email senden</button>
          </div>

       </li>
       </ul>

     </div>
   </form>
  </body>
</html>