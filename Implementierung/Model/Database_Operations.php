<?php

require_once 'DB_Connector.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  function test()
  {
      echo "Operations On.";
  }

    test();



    function getUserById($id)
    {
      $sql = "Select * From Benutzer where Benutzer_Id = '$id'";
      return $sql;
    }

    function getIdByUsername($username)
    {
      $sql = "Select b.Benutzer_Id From Benutzer b where b.Benutzername = '$username'";
      return $sql;
    }

    function getUserByUsername($username)
    {
      $sql = "Select * From Benutzer where Benutzername = '$username'";
      return $sql;
    }

    function getUserByEMail($email)
    {
      $sql = "Select * From Benutzer where EMailAdresse = '$email'";
      return $sql;
    }

    function getPasswordByUsername($username)
    {
      $sql = "Select b.Passwort From Benutzer b where b.Benutzername = '$username'";
      return $sql;
    }

    function getEMailByUsername($username)
    {
      $sql = "Select b.EMailAdresse From Benutzer b where b.Benutzername = '$username'";
      return $sql;
    }

    function getUserAddressId($street, $housenr, $post, $location, $country)
    {
      $sql = "Select a.Adresse_Id From Adresse a where a.Strasse = '$street' and a.Hausnummer = '$housenr' and a.Postleitzahl = '$post' and a.Ort = '$location' and a.Land = '$country'";
      return $sql;
    }

    function getAssignmentId($name, $desc, $status, $createdate)
    {
      $sql = "Select a.Auftrag_Id From Auftraege a where a.Name = '$name' and a.Beschreibung = '$desc' and a.Status = '$status' and a.Erstellungsdatum = '$createdate'";
      return $sql;
    }

    function getUserAddressByUsername($username)
    {
      $sql = "Select * From Adresse a JOIN Benutzer b using(Adresse_Id) where b.Benutzername = '$username'";
      return $sql;
    }

    function getUserAssignmentsByUsername($username)
    {
      $sql = "Select a From Benutzer b JOIN Auftraege a using(Auftrag_Id) where b.Benutzername = '$username'";
      return $sql;
    }

    function getAssignmentById($id)
    {
      $sql = "Select * FROM Auftraege where Auftrag_Id = '$id'";
      return $sql;
    }

    function getAssignmentsByStatus($status)
    {
      $sql = "Select * FROM Auftraege where Status = '$status'";
      return $sql;
    }

    function getAllAssignments()
    {
      $sql = "Select * From Auftraege";
      return $sql;
    }

    function countAllAssignments()
    {
      $sql = "Select count(*) From Auftraege";
      return $sql;
    }

    function countAssignmentsByStatus($status)
    {
      $sql = "Select count(*) FROM Auftraege where Status = '$status'";
      return $sql;
    }

    function getUserByAssignmentId($id)
    {
      $sql = "Select * From Benutzer b JOIN Auftraege a using(Auftrag_Id) where b.Auftrag_Id = '$id'";
      return $sql;
    }

    function getAssignmentByTitle($title)
    {
      $sql = "Select * From Auftraege where Name = '$title'";
      return $sql;
    }

  function insert_new_user($username, $password, $email, $registerdate, $status)
  {
    $sql = "INSERT INTO Benutzer(Benutzername, Passwort, EMailAdresse, Vorname, Nachname, Geschlecht, Geburtsdatum, Firma, Selbstbeschreibung, Homepage, Telefonnummer, Fax, Letzteanmeldung, Registrierungsdatum, Status, Auftrag_Id, Adresse_Id) VALUES('$username', '$password', '$email', null, null, null, null, null, null, null, null, null, null, '$registerdate', '$status', null, null)";
    return $sql;
  }

  function insert_user_data($id, $vorname, $nachname, $geschlecht, $geburtsdatum, $firma, $selbstbeschreibung, $homepage, $telefonnummer, $fax, $letzteanmeldung)
  {
    $sql = "UPDATE Benutzer b set b.Vorname = '$vorname', b.Nachname = '$nachname', b.Geschlecht = '$geschlecht', b.Geburtsdatum ='$geburtsdatum', b.Firma = '$firma', b.Selbstbeschreibung = '$selbstbeschreibung', b.Homepage = '$homepage', b.Telefonnummer = '$telefonnummer', b.Fax = '$fax', b.Letzteanmeldung = '$letzteanmeldung' where b.Benutzer_Id = '$id'";
    return $sql;
  }

  function insert_new_assignment($name, $desc, $status, $createdate)
  {
    $sql = "INSERT INTO Auftraege(Name, Beschreibung, Status, Erstellungsdatum) VALUES('$name', '$desc', '$status', '$createdate')";
    return $sql;
  }

  function insert_new_address($street, $housenr, $post, $city, $country)
  {
    $sql = "INSERT INTO Adresse(Strasse, Hausnummer, Postleitzahl, Ort, Land) VALUES('$street', '$housenr', '$post', '$city', '$country')";
    return $sql;
  }

  function update_user_password_by_email($password, $email)
  {
    $sql = "UPDATE Benutzer b set b.Passwort = '$password'  where b.EMailAdresse = '$email'";
    return $sql;
  }

  function update_user_password_by_username($password, $username)
  {
    $sql = "UPDATE Benutzer b set b.Passwort = '$password' where b.Benutzername = '$username'";
    return $sql;
  }

  function update_user_email_by_username($email, $username)
  {
    $sql = "UPDATE Benutzer b set b.EMailAdresse = '$email' where b.Benutzername = '$username'";
    return $sql;
  }

  function update_user_address_by_username($username, $address_id)
  {
    $sql = "UPDATE Benutzer b set b.Adresse_Id = '$address_id' where b.Benutzername = '$username'";
    return $sql;
  }

  function update_user_assignment_by_username($username, $assignment_id)
  {
    $sql = "UPDATE Benutzer b set b.Auftrag_Id = '$assignment_id' where b.Benutzername = '$username'";
    return $sql;
  }

  function update_assignment_status_by_id($id, $status)
  {
    $sql = "UPDATE Auftraege a set a.Status = '$status' where a.Auftrag_Id = '$id'";
    return $sql;
  }


  function deleteUserByUsername($username)
  {
    $sql = "DELETE Benutzer b where b.Benutzername = '$username'";
    return $sql;
  }

  function deleteAssignmentById($id)
  {
    $sql = "DELETE Auftraege a where a.Auftrag_Id = '$id'";
    return $sql;
  }



  function execute($sql)
  {
    foreach ($pdo->query($sql) as $row) {
       print_r($row);
    }
  }




 ?>
