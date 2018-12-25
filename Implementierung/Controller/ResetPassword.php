<?php
if (isset($_POST['button'])) {

  $password = $pdo->query(getPasswordByUsername($_SESSION['name']));

  if (password_verify($_POST['old_password'], $password)) {

      $new_password = $_POST['new_password'];
      $crypted = password_hash($new_password, PASSWORD_DEFAULT);

      $result = $pdo->query(update_user_password_by_username($crypted, $_SESSION['name']));
  }


}

 ?>
