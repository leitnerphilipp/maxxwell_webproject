<?php

require_once 'DB_Connector.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
      $sql = "Select Benutzer_Id From Benutzer where Benutzername = '$username'";
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
      $sql = "Select a.Adresse_Id From Adresse a where a.Straße = '$street' and a.Hausnummer = '$housenr' and a.Postleitzahl = '$post' and a.Ort = '$location' and a.Land = '$country'";
      return $sql;
    }

    function getAssignmentId($name, $desc, $status, $createdate)
    {
      $sql = "Select a.Auftrag_Id From Auftrag a where a.Name = '$name' and a.Beschreibung = '$desc' and a.Status = '$status' and a.Erstellungsdatum = '$createdate'";
      return $sql;
    }

    function getUserAddressByUsername($username)
    {
      $sql = "Select a From Benutzer b JOIN Addresse a using(Adresse_Id) where b.Benutzername = '$username'";
      return $sql;
    }

    function getUserAssignmentsByUsername($username)
    {
      $sql = "Select a From Benutzer b JOIN Aufträge a using(Auftrag_Id) where b.Benutzername = '$username'";
      return $sql;
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
    $sql = "INSERT INTO Adresse(Straße, Hausnummer, Postleitzahl, Ort, Land) VALUES('$street', $housenr, $post, '$city', '$country')";
    return $sql;
  }

  function update_user_password_by_email($password, $email)
  {
    $sql = "UPDATE Benutzer b where b.EMailAdresse = '$email' set b.Passwort = '$password'";
    return $sql;
  }

  function update_user_password_by_username($password, $username)
  {
    $sql = "UPDATE Benutzer b where b.Benutzername = '$username' set b.Passwort = '$password'";
    return $sql;
  }

  function update_user_email_by_username($email, $username)
  {
    $sql = "UPDATE Benutzer b where b.Benutzername = '$username' set b.EMailAdresse = '$email'";
    return $sql;
  }

  function update_user_address_by_username($username, $address_id)
  {
    $sql = "UPDATE Benutzer b where b.Benutzername = '$username' set b.Adresse_Id = '$address_id'";
    return $sql;
  }

  function update_user_assignment_by_username($username, $assignment_id)
  {
    $sql = "UPDATE Benutzer b where b.Benutzername = '$username' set b.Auftrag_Id = '$address_id'";
    return $sql;
  }


  function deleteUserByUsername($username)
  {
    $sql = "DELETE Benutzer b where b.Benutzername = '$username'";
    return $sql;
  }



  function execute($sql)
  {
    foreach ($pdo->query($sql) as $row) {
       print_r($row);
    }
  }




 ?>
