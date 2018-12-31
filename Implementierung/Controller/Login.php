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

    $result = $pdo->query(getUserByUsername($_POST['username']));

    if (strpos($_POST['username'], '@') !== false) {
      $result = $pdo->query(getUserByEMail($_POST['username']));
    }
    else {
      $result = $pdo->query(getUserByUsername($_POST['username']));
    }

    foreach ($result as $row) {
      if (password_verify($_POST['password'], $row['Passwort'])) {
          echo 'Password is valid!';

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
          echo 'Invalid password.';
      }
    }
  }
}


 ?>
