<?php

if (isset($_POST['action4'])) {

  echo "Pop up button";

  $result5 = $pdo->query(deleteUserByUsername($_SESSION['name']));
  include('Logout.php');
}

 ?>
