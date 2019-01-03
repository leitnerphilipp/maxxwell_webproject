<?php

require_once '../Model/Database_Operations.php';


if (isset($_POST['action'])) {
  if (empty($_POST['username'])) {
    echo "ERROR";
  }
  if (empty($_POST['password'])) {
    echo "ERROR";
  }
  else {

    if (strpos($_POST['username'], '@') !== false) {
      $result = $pdo->prepare(getUserByEMail($_POST['username']));
      $result->execute();
      $exists = $result->fetchAll();
    }
    else {
      $result = $pdo->prepare(getUserByUsername($_POST['username']));
      $result->execute();
      $exists = $result->fetchAll();
    }

    if ($exists == null) {
      echo "'<script>alert('Benutzername oder Email existiert nicht!');</script>'";
    }
    else {
      foreach ($exists as $row) {
        if (password_verify($_POST['password'], $row['Passwort'])) {
              if ($row['Status'] == 'benutzer') {
                session_start();//USER
                $_SESSION["access"] = "user";
                $_SESSION["name"] = $row['Benutzername'];
                header("Location: ../View/Profil/Benutzer/index.php");
              }
              if ($row['Status'] == 'admin') {
                session_start();//ADMIN
                $_SESSION["access"] = "admin";
                $_SESSION["name"] = $row['Benutzername'];
                header("Location: ../View/Profil/Administrator/index.php");
              }

        } else {
            echo "'<script>alert('Passwort falsch!');</script>'";
        }
      }
    }



  }
}


 ?>
