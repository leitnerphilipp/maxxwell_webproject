<?php

$id = 0;

$allAssignments = $pdo->query(getAllAssignments());

$query2 = $pdo->prepare(countAllAssignments());
$query2->execute();
$AssignmentsCount = $query2->fetch();

foreach ($allAssignments as $row) {
  $assignment_id          = $row['Auftrag_Id'];
  $assignment_name        = $row['Name'];
  $assignment_desc        = $row['Beschreibung'];
  $assignment_status      = $row['Status'];
  $assignment_createdate  = $row['Erstellungsdatum'];
}



?>
