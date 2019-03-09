<?php

require_once '../Model/Database_Operations.php';


if (isset($_POST['action'])) {

  if (empty($_POST['username'])) {
    echo "'<script>alert('Benutzername darf nicht leer sein!');window.location.href = '../View/register/index.php';</script>'";
  }
  if (empty($_POST['password1'])) {
    echo "'<script>alert('Passwort darf nicht leer sein!');window.location.href = '../View/register/index.php';</script>'";
  }
  if (empty($_POST['password2'])) {
    echo "'<script>alert('Passwort darf nicht leer sein!');window.location.href = '../View/register/index.php';</script>'";
  }
  if (empty($_POST['email'])) {
    echo "'<script>alert('E-Mail-Adresse darf nicht leer sein!');window.location.href = '../View/register/index.php';</script>'";
  }
  else {

    $password = $_POST['password1'];
    $crypted = password_hash($password, PASSWORD_DEFAULT);

    $reg_date = date("Y-m-d H:i:s");

    $status = 'benutzer';

    include('MailSender.php');
    try
    {
    $result = $pdo->prepare(insert_new_user($_POST['username'], $crypted, $_POST['email'], $reg_date, $status));
    $result->execute();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
    session_start();//USER
    $_SESSION["access"] = "user";
    $_SESSION["name"] = $_POST['username'];
    header("Location: ../View/Profil/Benutzer/index.php");
  }
}



 ?>
