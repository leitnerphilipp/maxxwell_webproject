<?php

  $name       = $_POST['ass_title'];
  $desc       = $_POST['ass_desc'];
  $status     = "Noch nicht behandelt";
  $createdate = date("Y-m-d H:i:s");

  try
  {
  $res = $pdo->query(insert_new_assignment($name, $desc, $status, $createdate));
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }

  $assignment_id = $pdo->prepare(getAssignmentId($name, $desc, $status, $createdate));
  $assignment_id->execute();
  $ass_id = $assignment_id->fetch();

  $result7 = $pdo->prepare(update_user_assignment_by_username($_SESSION['name'], $ass_id['Auftrag_Id']));
  $result7->execute();

 ?>
