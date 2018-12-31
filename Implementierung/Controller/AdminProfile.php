<?php

$allAssignments = $pdo->query(getAllAssignments());

function getCountAssignments()
{
  $query2 = $pdo->prepare(countAllAssignments());
  $query2->execute();
  $AssignmentsCount = $query2->fetch();

  return $AssignmentsCount['count(*)'];
}

foreach ($allAssignments as $row) {
  $assignment_id          = $row['Auftrag_Id'];
  $assignment_name        = $row['Name'];
  $assignment_desc        = $row['Beschreibung'];
  $assignment_status      = $row['Status'];
  $assignment_createdate  = $row['Erstellungsdatum'];
}

/*$query = $pdo->query(getUserByAssignment());

foreach ($query as $row) {
  $firstname      = $row['first-name'];
  $lastname       = $row['last-name'];
  $gender         = $row['group1'];
  $date           = $row['date'];
  $company        = $row['company'];
  $description    = $row['short-description'];
  $street         = $row['street'];
  $number         = $row['number'];
  $postalcode     = $row['postalcode'];
  $city           = $row['city'];
  $country        = $row['country'];
  $homepage       = $row['homepage'];
  $telephone      = $row['telephone'];
  $fax            = $row['fax'];
  $email          = $row['EMailAdresse'];
}*/


?>
