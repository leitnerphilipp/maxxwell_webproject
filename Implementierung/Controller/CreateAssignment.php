<?php

if (isset($_POST['action5'])) {

  $name       = $_POST['ass_title'];
  $desc       = $_POST['ass_desc'];
  $status     = 'Noch nicht behandelt';
  $createdate = date("Y-m-d H:i:s");

  $result6 = $pdo->query(insert_new_assignment($name, $desc, $status, $createdate));
  $assignment_id = $pdo->query(getAssignmentId($name, $desc, $status, $createdate));
  $result7 = $pdo->query(update_user_assignment_by_username($_SESSION['name'], $assignment_id));
}

 ?>
