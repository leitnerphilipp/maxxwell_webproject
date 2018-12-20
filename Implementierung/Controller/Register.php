<?php

require_once '../Model/Database_Operations.php';

if (empty($_POST['username'])) {
  echo "ERROR";
}
if (empty($_POST['password'])) {
  echo "ERROR";
}
if (empty($_POST['email'])) {
  echo "ERROR";
}
else {

  $password = $_POST['password'];
  $crypted = password_hash($password, PASSWORD_DEFAULT);

  $reg_date = date("Y-m-d H:i:s");

  $status = 'benutzer';

  try{
  $result = $pdo->query(insert_new_user($_POST['username'], $crypted, $_POST['email'], $reg_date, $status))}
  catch(PDOException e){ echo "ERROR";}

}

 ?>
