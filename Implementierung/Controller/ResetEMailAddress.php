<?php
  $email = $pdo->query(getEMailByUsername($_SESSION['name']));

  if ($_POST['old_email'] == $email) {

      $new_email = $_POST['email1'];

      $result = $pdo->query(update_user_email_by_username($new_email, $_SESSION['name']));
  }


 ?>
