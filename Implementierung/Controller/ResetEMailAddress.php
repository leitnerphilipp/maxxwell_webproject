<?php
  $q2 = $pdo->prepare(getEMailByUsername($_SESSION['name']));
  $q2->execute();
  $email = $q2->fetch();

  if ($_POST['old_email'] == $email['EMailAdresse']) {

      $new_email = $_POST['email1'];

      $result = $pdo->query(update_user_email_by_username($new_email, $_SESSION['name']));

      header('Location: Logout.php');
  }
  else {
      echo "'<script>alert('Passwort falsch!');</script>'";
  }


 ?>
