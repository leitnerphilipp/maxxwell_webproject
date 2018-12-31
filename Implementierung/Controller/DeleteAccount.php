<?php

  echo "'<script>alert('Sie sind im Inbegriff Ihren Account zu löschen!');</script>'";

  $result5 = $pdo->query(deleteUserByUsername($_SESSION['name']));
  header('Location: Logout.php');

 ?>
