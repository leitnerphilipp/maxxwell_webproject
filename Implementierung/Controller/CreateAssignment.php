<?php

  $name       = $_POST['ass_title'];
  $desc       = $_POST['ass_desc'];
  $status     = "Noch nicht behandelt";
  $createdate = date("Y-m-d H:i:s");

  $query = $pdo->prepare(getAssignmentStatusByUsername($_SESSION['name']));
  $query->execute();
  $res3 = $query->fetch();

  if ($res3['Status'] != null) {
    echo "'<script>alert('Nur ein Auftrag per Benutzer!');window.location.href = '../View/Profil/Benutzer/index.php';</script>'";
  }
  else {
    try
    {
    $res = $pdo->query(insert_new_assignment($name, $desc, $status, $createdate));
    }
    catch(PDOException $e)
    {
      echo "'<script>alert('Felder dürfen nicht leer sein!');window.location.href = '../View/Profil/Benutzer/index.php';</script>'";
    }

    $assignment_id = $pdo->prepare(getAssignmentId($name, $desc, $status, $createdate));
    $assignment_id->execute();
    $ass_id = $assignment_id->fetch();

    $result7 = $pdo->prepare(update_user_assignment_by_username($_SESSION['name'], $ass_id['Auftrag_Id']));
    $result7->execute();
    header('Location: ../View/Profil/Benutzer/index.php');

  }



 ?>
