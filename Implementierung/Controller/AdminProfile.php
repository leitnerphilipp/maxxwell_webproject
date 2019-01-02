<?php

$id = 0;
$s_Noch_nicht_behandelt = "Noch nicht behandelt";
$s_In_Bearbeitung = "In Bearbeitung";
$s_Abgeschlossen = "Abgeschlossen";

$query1 = $pdo->prepare(getAllAssignments());
$query1->execute();
$allAssignments = $query1->fetchAll();

$query2 = $pdo->prepare(countAssignmentsByStatus($s_Noch_nicht_behandelt));
$query2->execute();
$AssignmentsCountN = $query2->fetch();

$query1 = $pdo->prepare(getAssignmentsByStatus($s_Noch_nicht_behandelt));
$query1->execute();
$allAssignmentsN = $query1->fetchAll();

$query0 = $pdo->prepare(countAssignmentsByStatus($s_In_Bearbeitung));
$query0->execute();
$AssignmentsCountB = $query0->fetch();

$query3 = $pdo->prepare(getAssignmentsByStatus($s_In_Bearbeitung));
$query3->execute();
$allAssignmentsB = $query3->fetchAll();


foreach ($allAssignmentsN as $row) {
  $assignment_id1[]           = $row['Auftrag_Id'];
  $assignment_name1[]         = $row['Name'];
  $assignment_desc1[]         = $row['Beschreibung'];
  $assignment_status1[]       = $row['Status'];
  $assignment_createdate1[]   = $row['Erstellungsdatum'];
}

foreach ($allAssignmentsB as $row) {
  $assignment_id2[]           = $row['Auftrag_Id'];
  $assignment_name2[]         = $row['Name'];
  $assignment_desc2[]         = $row['Beschreibung'];
  $assignment_status2[]       = $row['Status'];
  $assignment_createdate2[]   = $row['Erstellungsdatum'];
}

?>
