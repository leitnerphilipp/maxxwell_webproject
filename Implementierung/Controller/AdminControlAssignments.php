<?php

session_start();

require_once '../Model/Database_Operations.php';

if (isset($_POST['action14'])) {//accept
  $ass_title = $_POST['assignment_title'];
  $query21 = $pdo->prepare(getAssignmentByTitle($ass_title));
  $query21->execute();
  $getter = $query21->fetchAll();
  foreach ($getter as $row)
  {$ass_id = $row['Auftrag_Id'];}
  $result = $pdo->query(update_assignment_status_by_id($ass_id, "In Bearbeitung"));

  echo "'<script>alert('Auftrag angenommen! Sie können diesen nun im Reiter *Laufende Aufräge* einsehen');window.location.href = '../View/Profil/Administrator/index.php';</script>'";
}

if (isset($_POST['action15'])) {//decline
  $ass_title = $_POST['assignment_title'];
  $query21 = $pdo->prepare(getAssignmentByTitle($ass_title));
  $query21->execute();
  $getter = $query21->fetchAll();
  foreach ($getter as $row)
  {$ass_id = $row['Auftrag_Id'];}
  $result = $pdo->query(deleteAssignmentById($ass_id));

  echo "'<script>alert('Auftrag abgelehnt!');window.location.href = '../View/Profil/Administrator/index.php';</script>'";
}

?>
