<?php

$query = $pdo->prepare(getAssignmentById($id));
$query->execute();
$var = $query->fetchAll();

$user = $pdo->prepare(getUserByAssignmentId($id));
$user->execute();
$user_details = $user->fetchAll();

$l_homepage = null;
$l_email = null;

foreach ($var as $row) {

  $l_name = $row['Name'];
  $l_desc = $row['Beschreibung'];

  if ($det == 1) {
    foreach ($user_details as $usr_row) {
      $l_homepage = $usr_row['Homepage'];
      $l_email = $usr_row['EMailAdresse'];
    }

  }
  else {

  }


}



?>
