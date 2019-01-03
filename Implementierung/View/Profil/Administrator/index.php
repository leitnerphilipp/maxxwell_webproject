<?php

 session_start();

  require_once '../../../Model/Database_Operations.php';

 if (!isset($_SESSION['name'])) {
  die('<script>alert("Bitte zuerst einloggen!");</script>');
  }
  else {

    include '../../../Controller/AdminProfile.php';

  }




?>

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

  <script type="text/javascript" src="js/admin-profil.js"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../main/index.html">Start</a></li>
          <li><a href="../.html">Kontakt</a></li>
          <li class="active"><a href="collapsible.html">Profil</a></li>
          <li><a href="../../../Controller/Logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">


      <div class="profilcontainer">

      <ul class="collapsible">
         <li>
           <div class="collapsible-header"><i class="material-icons">star</i>Showcases bearbeiten</div>
           <div class="collapsible-body">
           <div class="row">
             <span>Zum Bearbeiten auf das jeweiligen Showcase klicken</span>

             <a class="waves-effect waves-light btn modal-trigger" id="addShowcase" href="#modalShowcaseAdd">Erstellen</a>


          </div>

          <div class="row">
            <div class="col s3">
              <div class="showcase">
                <a class="modal-trigger" href="#modalShowcaseEdit">
                 <span class="showcase-content">Showcase 1</span>
                </a>
              </div>
            </div>
            <div class="col s3">
              <div class="showcase">
                <a class="modal-trigger" href="#modalShowcaseEdit">
                 <span class="showcase-content">Showcase 2</span>
                </a>
              </div>
            </div>
            <div class="col s3">
              <div class="showcase">
                <a class="modal-trigger" href="#modalShowcaseEdit">
                 <span class="showcase-content">Showcase 3</span>
                </a>
              </div>
            </div>
            <div class="col s3">
              <div class="showcase">
                <a class="modal-trigger" href="#modalShowcaseEdit">
                 <span class="showcase-content">Showcase 4</span>
                </a>
              </div>
            </div>
          </div>
           </div>
         </li>
         <li>
           <div class="collapsible-header"><i class="material-icons">assignment</i>Laufende Aufträge</div>
           <div class="collapsible-body">
              <div class="row">

                <?php
                for ($i=0; $i < $AssignmentsCountB['count(*)']; $i++) {
                  $id = $assignment_id2[$i];
                  include '../../../Controller/AdminAssignments.php';?>

                  <div class="col s3">
                    <div class="assignment">
                      <a class="modal-trigger" href="#modalAssignmentRunning<?php echo $i + 1; ?>">
                       <span class="showcase-content">Auftrag <?php echo $i + 1; ?>
                       </span>
                      </a>
                    </div>
                  </div>


                  <div id="modalAssignmentRunning<?php echo $i +1; ?>" class="modal">
                    <div class="modal-content">
                      <h4>Auftrag</h4>
                      <form>
                        <div class="row">
                          <div class="col s3">
                          </div>
                          <div class="col s9">
                            <span>Persönliche Daten des Auftraggebers</span>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col s3">
                           <div class="input-field">
                             <input id="assignment_title" type="text" class="validate" name="assignment_title" value="<?php echo htmlspecialchars($assignment_name2[$i]); ?>">
                             <label for="assignment_title">Titel</label>
                           </div>
                           <div class="input-field">
                             <textarea id="assignment_desc" class="materialize-textarea" name="assignment_desc" value="<?php echo htmlspecialchars($assignment_desc2[$i]); ?>"></textarea>
                             <label for="assignment_desc">Beschreibung</label>
                           </div>
                           <p>
                                <label>
                                  <input name="group2" type="radio" checked />
                                  <span>in Bearbeitung</span>
                                </label>
                              </p>
                              <p>
                                <label>
                                  <input name="group2" type="radio" />
                                  <span>abgeschlossen</span>
                                </label>
                           </p>
                           <span>Auftraggeber per E-Mail kontaktieren</span>
                           <button class="btn waves-effect waves-light sendEmail" id="sendEmail" name="sendEmail" onclick="location.href='mailto:<?php htmlspecialchars($email); ?>'">E-Mail</button>
                         </div>
                         <div class="col s3">
                           <div class="input-field">
                             <input id="first-name" type="text" class="validate" name="first-name" value="<?php echo htmlspecialchars($firstname); ?>">
                             <label for="first-name">Vorname</label>
                           </div>
                           <div class="input-field">
                             <input id="last-name" type="text" class="validate" name="last-name" value="<?php echo htmlspecialchars($lastname); ?>">
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
                           <input id="company" type="text" class="validate" name="company" value="<?php echo htmlspecialchars($company); ?>">
                           <label for="company">Firma/Unternehmen</label>
                         </div>
                         <div class="input-field">
                           <textarea id="description" class="materialize-textarea" name="short-description" value="<?php echo htmlspecialchars($description); ?>"></textarea>
                           <label for="description">Kurze Selbstbeschreibung</label>
                         </div>
                         </div>
                         <div class="col s3">
                           <div class="input-field">
                             <input id="street" type="text" class="validate" name="street" value="<?php echo htmlspecialchars($street); ?>">
                             <label for="street">Straße</label>
                           </div>
                           <div class="input-field">
                             <input id="number" type="text" class="validate" name="number" value="<?php echo htmlspecialchars($number); ?>">
                             <label for="number">Hausnummer</label>
                           </div>
                           <div class="input-field">
                             <input id="postalcode" type="text" class="validate" name="postalcode" value="<?php echo htmlspecialchars($postalcode); ?>">
                             <label for="postalcode">Postleitzahl</label>
                           </div>
                           <div class="input-field">
                             <input id="city" type="text" class="validate" name="city" value="<?php echo htmlspecialchars($city); ?>">
                             <label for="city">Ort</label>
                           </div>
                           <div class="input-field">
                             <input id="country" type="text" class="validate" name="country" value="<?php echo htmlspecialchars($country); ?>">
                             <label for="country">Land</label>
                           </div>
                         </div>
                         <div class="col s3 final">
                           <div class="input-field">
                             <input id="homepage" type="text" class="validate" name="homepage" value="<?php echo htmlspecialchars($homepage); ?>">
                             <label for="homepage">Homepage</label>
                           </div>
                           <div class="input-field">
                             <input id="telephone" type="text" class="validate" name="telephone" value="<?php echo htmlspecialchars($telephone); ?>">
                             <label for="telephone">Telefonnummer</label>
                           </div>
                           <div class="input-field">
                             <input id="fax" type="text" class="validate" name="fax" value="<?php echo htmlspecialchars($fax); ?>">
                             <label for="fax">Fax</label>
                           </div>
                         </div>
                       </div>
                       <div class="row">
                         <button class="btn waves-effect waves-light saveAssignmentBTN" id="saveAssignmentBTN" type="submit" name="action1">Speichern
                         </button>
                       </div>
                     </form>
                    </div>
                  </div>



                 <?php
                 }
                 ?>

              </div>
           </div>
         </li>

         <li>
           <div class="collapsible-header"><i class="material-icons">assignment_late</i>Offene Aufträge</div>
           <div class="collapsible-body">
             <div class="row">
               <?php
               for ($i=0; $i < $AssignmentsCountN['count(*)']; $i++) {
                 $id = $assignment_id1[$i];
                 include '../../../Controller/AdminAssignments.php';?>

                 <div class="col s3">
                   <div class="assignment">
                     <a class="modal-trigger" href="#modalAssignmentOpen<?php echo $i + 1; ?>">
                      <span class="showcase-content">Auftrag <?php echo $i + 1; ?>
                      </span>
                     </a>
                   </div>
                 </div>



                 <div id="modalAssignmentOpen<?php echo $i + 1; ?>" class="modal">
                   <div class="modal-content">
                     <h4>Auftrag</h4>
                     <form method="post" action="../../../Controller/AdminControlAssignments.php">
                       <div class="row">
                         <div class="col s3">
                           <span>Auftragsantrag</span>
                         </div>
                         <div class="col s9">
                           <span>Persönliche Daten des Auftraggebers</span>
                         </div>
                       </div>
                       <div class="row">
                        <div class="col s3">
                          <div class="input-field">
                            <input id="assignment_title" type="text" class="validate" name="assignment_title" value="<?php echo htmlspecialchars($assignment_name1[$i]); ?>">
                            <label for="assignment_title">Titel</label>
                          </div>
                          <div class="input-field">
                            <textarea id="assignment_desc" class="materialize-textarea" name="assignment_desc" value="<?php echo htmlspecialchars($assignment_desc1[$i]); ?>"></textarea>
                            <label for="assignment_desc">Beschreibung</label>
                          </div>
                          <p>
                               <label>
                                 <input name="group2" type="radio" checked />
                                 <span>in Bearbeitung</span>
                               </label>
                             </p>
                             <p>
                               <label>
                                 <input name="group2" type="radio" />
                                 <span>abgeschlossen</span>
                               </label>
                          </p>
                          <span>Auftraggeber per E-Mail kontaktieren</span>
                          <button class="btn waves-effect waves-light sendEmail" id="sendEmail" name="sendEmail" onclick="location.href=' value="<?php echo htmlspecialchars($email); ?>"'">E-Mail</button>
                        </div>
                        <div class="col s3">
                          <div class="input-field">
                            <input id="first-name" type="text" class="validate" name="first-name" value="<?php echo htmlspecialchars($firstname)?>">
                            <label for="first-name">Vorname</label>
                          </div>
                          <div class="input-field">
                            <input id="last-name" type="text" class="validate" name="last-name" value="<?php echo htmlspecialchars($lastname); ?>">
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
                          <input id="company" type="text" class="validate" name="company" value="<?php echo htmlspecialchars($company); ?>">
                          <label for="company">Firma/Unternehmen</label>
                        </div>
                        <div class="input-field">
                          <textarea id="description" class="materialize-textarea" name="short-description" value="<?php echo htmlspecialchars($description); ?>"></textarea>
                          <label for="description">Kurze Selbstbeschreibung</label>
                        </div>
                        </div>
                        <div class="col s3">
                          <div class="input-field">
                            <input id="street" type="text" class="validate" name="street" value="<?php echo htmlspecialchars($street); ?>">
                            <label for="street">Straße</label>
                          </div>
                          <div class="input-field">
                            <input id="number" type="text" class="validate" name="number" value="<?php echo htmlspecialchars($number); ?>">
                            <label for="number">Hausnummer</label>
                          </div>
                          <div class="input-field">
                            <input id="postalcode" type="text" class="validate" name="postalcode" value="<?php echo htmlspecialchars($postalcode); ?>">
                            <label for="postalcode">Postleitzahl</label>
                          </div>
                          <div class="input-field">
                            <input id="city" type="text" class="validate" name="city" value="<?php echo htmlspecialchars($city); ?>">
                            <label for="city">Ort</label>
                          </div>
                          <div class="input-field">
                            <input id="country" type="text" class="validate" name="country" value="<?php echo htmlspecialchars($country); ?>">
                            <label for="country">Land</label>
                          </div>
                        </div>
                        <div class="col s3 final">
                          <div class="input-field">
                            <input id="homepage" type="text" class="validate" name="homepage" value="<?php echo htmlspecialchars($homepage); ?>">
                            <label for="homepage">Homepage</label>
                          </div>
                          <div class="input-field">
                            <input id="telephone" type="text" class="validate" name="telephone" value="<?php echo htmlspecialchars($telephone); ?>">
                            <label for="telephone">Telefonnummer</label>
                          </div>
                          <div class="input-field">
                            <input id="fax" type="text" class="validate" name="fax" value="<?php echo htmlspecialchars($fax); ?>">
                            <label for="fax">Fax</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <button class="btn waves-effect waves-light acceptAssignmentBTN" id="acceptAssignmentBTN" type="submit" name="action14">Annehmen</button>
                        <button class="btn waves-effect waves-light declineAssignmentBTN red" id="declineAssignmentBTN" type="submit" name="action15">Ablehnen</button>
                      </div>
                    </form>
                   </div>
                 </div>


                 <?php
                 }
                 ?>



             </div>
           </div>
         </li>
       </ul>

     </div>






                  <form  action="../../../Controller/AdminControlShowcases.php" method="post">
                   <div id="modalShowcaseAdd" class="modal">
                     <div class="modal-content">
                       <h4>Auftrag auswählen</h4>

                       <div class="row">
                       <div class="input-field col s4">
                         <select name="opt_assignment_new">
                           <option value="?" disabled selected>Aufträge</option>
                           <?php for ($i=0; $i < $countallAssignments['count(*)']; $i++) { ?>
                           <option value="<?php echo $assignment_id[$i];?>">Auftrag <?php echo $i + 1;?></option>
                           <?php } ?>
                         </select>
                       </div>
                      </div>

                      <p>
                           <label>
                             <input name="user_details_new" type="radio" value="1" checked/>
                             <span>mit Kontaktdaten des Auftraggebers</span>
                           </label>
                         </p>
                         <p>
                           <label>
                             <input name="user_details_new" type="radio" value="0"/>
                             <span>ohne Kontaktdaten des Auftraggebers</span>
                           </label>
                      </p>

                       <button class="btn waves-effect waves-light addShowcaseBTN" id="addShowcaseBTN" type="submit" name="action11">Hinzufügen
                       </button>

                     </div>
                   </div>

                   <div id="modalShowcaseEdit" class="modal">
                     <div class="modal-content">
                       <h4>Auftrag auswählen</h4>

                       <div class="row">
                       <div class="input-field col s4">
                         <select name="opt_assignment_edit">
                           <?php for ($i=0; $i < $countallAssignments['count(*)']; $i++) { ?>
                           <option value="<?php echo $assignment_id[$i];?>">Auftrag <?php echo $i + 1;?></option>
                           <?php } ?>
                         </select>
                       </div>
                      </div>

                      <p>
                           <label>
                             <input name="user_details_edit" type="radio" value="1" checked />
                             <span>mit Kontaktdaten des Auftraggebers</span>
                           </label>
                         </p>
                         <p>
                           <label>
                             <input name="user_details_edit" value="0" type="radio" />
                             <span>ohne Kontaktdaten des Auftraggebers</span>
                           </label>
                      </p>

                      <button class="btn waves-effect waves-light red deleteShowcaseBTN" id="deleteShowcaseBTN" type="submit" name="action13">Löschen
                      </button>

                       <button class="btn waves-effect waves-light addShowcaseBTN" id="addShowcaseBTN" type="submit" name="action12">Aktualisieren
                       </button>

                     </div>
                   </div>
                </form>





  </body>
</html>
