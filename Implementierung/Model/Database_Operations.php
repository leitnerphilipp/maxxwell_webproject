<?php

require_once 'DB_Connector.php';

  function test()
  {
      echo "test";
  }

    test();



    function getUserById($id)
    {
      $sql = "Select * From Benutzer where Benutzer_Id = '$id'";
      return $sql;
    }

    function getUserByUsername($username)
    {
      $sql = "Select * From Benutzer where Benutzername = '$username'";
      return $sql;
    }

    foreach ($pdo->query(getUserById(1)) as $row) {
   echo $row['Benutzername']."<br />";
   echo $row['Passwort']."<br />";
   echo $row['EMailAdresse']."<br /><br />";
  }

  function insert_new_user($username, $password, $email, $registerdate, $status)
  {
    $sql = "INSERT INTO Benutzer(Benutzername, Passwort, EMailAdresse, Vorname, Nachname, Geschlecht, Geburtsdatum, Firma, Selbstbeschreibung, Homepage, Telefonnummer, Fax, Letzteanmeldung, Registrierungsdatum, Status, Auftrag_Id, Adresse_Id) VALUES('$username', '$password', '$email', null, null, null, null, null, null, null, null, null, null, '$registerdate', '$status', null, null)";
    return $sql;
  }

  function insert_user_data($id, $vorname, $nachname, $geschlecht, $geburtsdatum, $firma, $selbstbeschreibung, $homepage, $telefonnummer, $fax, $letzteanmeldung)
  {
    $sql = "UPDATE Benutzer b where b.Benutzer_Id = '$id' set b.Vorname = '$vorname', b.Nachname = '$nachname', b.Geschlecht = '$geschlecht', b.Geburtsdatum ='$geburtsdatum', b.Firma = '$firma', b.Selbstbeschreibung = '$selbstbeschreibung', b.Homepage = '$homepage', b.Telefonnummer = '$telefonnummer', b.Fax = '$fax', b.Letzteanmeldung = '$letzteanmeldung'";
    return $sql;
  }

  function insert_new_assignment($name, $desc, $status, $createdate)
  {
    $sql = "INSERT INTO Aufträge(Name, Beschreibung, Status, Erstellungsdatum) VALUES('$name', '$desc', '$status', '$createdate')";
    return $sql;
  }

  function insert_new_address($street, $housenr, $post, $location, $country)
  {
    $sql = "INSERT INTO Adresse(Straße, Hausnummer, Postleitzahl, Ort, Land) VALUES('$street', $housenr, $post, '$location', '$country')";
    return $sql;
  }




  function execute($sql)
  {
    foreach ($pdo->query($sql) as $row) {
       print_r($row);
    }
  }




 ?>
