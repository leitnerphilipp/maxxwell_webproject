<?php

if (isset($_POST['logout'])) {

  session_unset();
  session_destroy();

  echo "you are now logged out!";

}

 ?>
