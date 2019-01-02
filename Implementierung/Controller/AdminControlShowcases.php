<?php
session_start();

require_once '../Model/Database_Operations.php';

if (isset($_POST['action11'])) {//create
  if (empty($_POST['opt_assignment_new'])) {
    echo "'<script>alert('Bitte auswählen!');</script>'";
    //header('Location: ../View/Profil/Administrator/index.php');
  }
  else {
    $selected_val = $_POST['opt_assignment_new'];
    $query11 = $pdo->prepare(getAssignmentById($selected_val));
    $query11->execute();
    $selected_assignment = $query11->fetchAll();
    print_r($selected_assignment);

    $selected_details = $_POST['user_details_new'];
    echo $selected_details;
  }

}

if (isset($_POST['action12'])) {//edit
  if (empty($_POST['opt_assignment_edit'])) {
    echo "'<script>alert('Bitte auswählen!');</script>'";
    //header('Location: ../View/Profil/Administrator/index.php');
  }
  else {
    $selected_val = $_POST['opt_assignment_edit'];
    $query11 = $pdo->prepare(getAssignmentById($selected_val));
    $query11->execute();
    $selected_assignment = $query11->fetchAll();
    print_r($selected_assignment);

    $selected_details = $_POST['user_details_edit'];
    echo $selected_details;
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
    print_r($selected_assignment);
  }
}

?>
