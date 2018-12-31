<?php
  $q1 = $pdo->prepare(getPasswordByUsername($_SESSION['name']));
  $q1->execute();
  $password = $q1->fetch();

  if (password_verify($_POST['old_psw'], $password['Passwort'])) {

      $new_password = $_POST['psw1'];
      $crypted = password_hash($new_password, PASSWORD_DEFAULT);

      $result = $pdo->query(update_user_password_by_username($crypted, $_SESSION['name']));

      header('Location: Logout.php');
  }
  else {
      echo "'<script>alert('Passwort falsch!');</script>'";
  }


 ?>
