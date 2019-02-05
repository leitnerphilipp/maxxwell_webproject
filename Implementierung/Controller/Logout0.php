<?php

session_start();

if (isset($_SESSION['name'])) {
  session_unset();
  session_destroy();
  echo "'<script>alert('Sie wurden erfolgreich abgemeldet!');window.location.href = '../View/main/index.php';</script>'";
}

else {
  echo "'<script>alert('Sie waren nicht angemeldet!');window.location.href = '../View/login/index.php';</script>'";
}

 ?>
