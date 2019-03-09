<?php
session_start();

require_once '../Model/Database_Operations.php';

if (isset($_POST['action11'])) {//create
  if (empty($_POST['opt_assignment_new'])) {
    echo "'<script>alert('Bitte auswählen!');window.location.href = '../View/Profil/Administrator/index.php';</script>>'";
    //header('Location: ../View/Profil/Administrator/index.php');
  }
  else {
    $query10 = $pdo->prepare(countAllShowcases());
    $query10->execute();
    $countShowcases = $query10->fetch();
    if ($countShowcases['count(*)'] >= 4) {
      echo "'<script>alert('Zu viele Showcases! Bitte zuerst eines löschen!');window.location.href = '../View/Profil/Administrator/index.php';</script>'";
    }
    else {
      $selected_val = $_POST['opt_assignment_new'];
      $query11 = $pdo->prepare(getAssignmentById($selected_val));
      $query11->execute();
      $selected_assignment = $query11->fetchAll();

      $selected_details = $_POST['user_details_new'];
      echo $selected_details;
      echo $selected_val;

      $query12 = $pdo->prepare(insert_new_showcase($selected_val, $selected_details));
      $query12->execute();
      header('Location: ../View/Profil/Administrator/index.php');
    }
  }

}

if (isset($_POST['action12'])) {//edit
  if (empty($_POST['opt_assignment_edit'])) {
    echo "'<script>alert('Bitte auswählen!');window.location.href = '../View/Profil/Administrator/index.php';</script>'";
  }
  else {
    $selected_val = $_POST['opt_assignment_edit'];
    $query11 = $pdo->prepare(getAssignmentById($selected_val));
    $query11->execute();
    $selected_assignment = $query11->fetchAll();

    $selected_details = $_POST['user_details_edit'];
    echo $selected_details;

    $query12 = $pdo->prepare(getShowcaseByAssignmentId($selected_val));
    $query12->execute();
    $selected_showcase = $query12->fetchAll();

    if ($selected_showcase == null) {
      echo "'<script>alert('Kein Showcase zu diesem Auftrag gefunden, bitte zuerst eines erstellen!');window.location.href = '../View/Profil/Administrator/index.php';</script>'";
    }
    else {
      foreach ($selected_showcase as $row) {
        $showcase_id = $row['Showcase_Id'];
      }

      $query13 = $pdo->prepare(update_showcase_by_id($showcase_id, $selected_val, $selected_details));
      $query13->execute();
      header('Location: ../View/Profil/Administrator/index.php');
    }



  }
}

if (isset($_POST['action13'])) {//delete
  if (empty($_POST['opt_assignment_edit'])) {
    echo "'<script>alert('Bitte auswählen!');</script>'";
    //header('Location: ../View/Profil/Administrator/index.php');
  }
  else {
    $selected_val = $_POST['opt_assignment_edit'];
    $query11 = $pdo->prepare(getAssignmentById($selected_val));
    $query11->execute();
    $selected_assignment = $query11->fetchAll();
    try{
    $query12 = $pdo->prepare(deleteShowcaseByAssignmentId($selected_val));
    $query12->execute();
  }catch(PDOException $e) {echo "'<script>alert('Löschen fehlgeschlagen, kein Showcase gefunden!');window.location.href = '../View/Profil/Administrator/index.php';</script>'";}
    echo "'<script>alert('Löschen erfolgreich!');window.location.href = '../View/Profil/Administrator/index.php';</script>'";
  }
}

?>
