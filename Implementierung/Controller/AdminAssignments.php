<?php

$query3 = $pdo->query(getUserByAssignmentId($id));

foreach ($query3 as $row) {
  $firstname      = $row['Vorname'];
  $lastname       = $row['Nachname'];
  $gender         = $row['Geschlecht'];
  $date           = $row['Geburtsdatum'];
  $company        = $row['Firma'];
  $description    = $row['Selbstbeschreibung'];
  $homepage       = $row['Homepage'];
  $telephone      = $row['Telefonnummer'];
  $fax            = $row['Fax'];
  $email          = $row['EMailAdresse'];
  $username       = $row['Benutzername'];
}


$query4 = $pdo->query(getUserAddressByUsername($username));

foreach ($query4 as $row) {
  $street         = $row['Strasse'];
  $number         = $row['Hausnummer'];
  $postalcode     = $row['Postleitzahl'];
  $city           = $row['Ort'];
  $country        = $row['Land'];
}




?>
