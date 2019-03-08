<?php
  $q1 = $pdo->prepare(getPasswordByUsername($_SESSION['name']));
  $q1->execute();
  $password = $q1->fetch();

  if (password_verify($_POST['old_psw'], $password['Passwort'])) {

      if($_POST['psw1'] == $_POST['psw2'])
      {

        $new_password = $_POST['psw1'];
        $crypted = password_hash($new_password, PASSWORD_DEFAULT);

        $result = $pdo->query(update_user_password_by_username($crypted, $_SESSION['name']));

        echo "'<script>alert('Änderungen vorgenommen, Sie werden nun ausgeloggt!');window.location.href = 'Logout.php';</script>'";
      }
      else {
        echo "'<script>alert('Passwörter stimmen nicht überein!');window.location.href = '../View/Profil/Benutzer/index.php';</script>'";
      }
  }
  else {
      echo "'<script>alert('Passwort falsch!');window.location.href = '../View/Profil/Benutzer/index.php';</script>'";
  }


 ?>
