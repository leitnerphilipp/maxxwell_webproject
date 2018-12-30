<?php

session_start();

if (isset($_SESSION['name'])) {
  echo "'<script>alert('Sie wurden erfolgreich abgemeldet!');</script>'";
  session_unset();
  session_destroy();
  header('Location: ../View/login/index.php');
}

else {
  echo "'<script>alert('Sie waren nicht angemeldet!');</script>'";
  header('Location: ../View/login/index.php');
}

 ?>
