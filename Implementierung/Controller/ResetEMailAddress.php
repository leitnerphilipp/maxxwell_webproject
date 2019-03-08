<?php
  $q2 = $pdo->prepare(getEMailByUsername($_SESSION['name']));
  $q2->execute();
  $email = $q2->fetch();

  if ($_POST['old_email'] == $email['EMailAdresse']) {

      if($_POST['email1'] == $_POST['email2'])
      {
        $new_email = $_POST['email1'];

        $result = $pdo->query(update_user_email_by_username($new_email, $_SESSION['name']));

        echo "'<script>alert('Änderungen vorgenommen, Sie werden nun ausgeloggt!');window.location.href = 'Logout.php';</script>'";
      }
      else {

        echo "'<script>alert('E-Mail-Adressen stimmen nicht überein!');window.location.href = '../View/Profil/Benutzer/index.php';</script>'";
      }

  }
  else {
      echo "'<script>alert('E-Mail falsch!');window.location.href = '../View/Profil/Benutzer/index.php';</script>'";
  }


 ?>
