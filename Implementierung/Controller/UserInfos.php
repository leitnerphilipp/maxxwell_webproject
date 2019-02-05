<?php

$query1 = $pdo->query(getUserByUsername($_SESSION['name']));
$query1->execute();
$res1 = $query1->fetchAll();

$firstname      = "";
$lastname       = "";
$gender         = "";
$date           = "";
$company        = "";
$description    = "";
$homepage       = "";
$telephone      = "";
$fax            = "";
$email          = "";
$username       = "";
$street         = "";
$number         = "";
$postalcode     = "";
$city           = "";
$country        = "";

foreach ($res1 as $row) {
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


$query2 = $pdo->query(getUserAddressByUsername($_SESSION['name']));
$query2->execute();
$res2 = $query2->fetchAll();

foreach ($res2 as $row) {
  $street         = $row['Strasse'];
  $number         = $row['Hausnummer'];
  $postalcode     = $row['Postleitzahl'];
  $city           = $row['Ort'];
  $country        = $row['Land'];
}

 ?>
