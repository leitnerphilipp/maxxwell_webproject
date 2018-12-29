<?php
if (isset($_POST['action2'])) {

  $password = $pdo->query(getPasswordByUsername($_SESSION['name']));

  if (password_verify($_POST['old_psw'], $password)) {

      $new_password = $_POST['psw1'];
      $crypted = password_hash($new_password, PASSWORD_DEFAULT);

      $result = $pdo->query(update_user_password_by_username($crypted, $_SESSION['name']));
  }


}

 ?>
