<?php

require_once '../Model/Database_Operations.php';

if (empty($_POST['username'])) {
  echo "ERROR";
}
if (empty($_POST['password'])) {
  echo "ERROR";
}
else {
  try{
  $result = $pdo->query(getUserByUsername($_POST['username']))}
  catch(PDOException e){ echo "ERROR";}
  foreach ($result as $row) {
    if (password_verify($_POST['password'], $row['Passwort'])) {
        echo 'Password is valid!';
        if ($row['Status'] == 'benutzer') {
          // benutzer
        }
        if ($row['Status'] == 'admin') {
          // admin
        }
    } else {
        echo 'Invalid password.';
    }
  }


}

 ?>
