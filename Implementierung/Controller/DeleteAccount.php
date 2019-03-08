<?php

  $result5 = $pdo->prepare(deleteUserByUsername($_SESSION['name']));
  echo "'<script>alert('Sie sind im Inbegriff Ihren Account zu löschen!');</script>'";
  session_unset();
  session_destroy();
  $result5->execute();
  header('Location: ../View/main/index.php');

 ?>
