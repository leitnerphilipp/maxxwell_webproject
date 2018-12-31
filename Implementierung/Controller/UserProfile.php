<?php

session_start();

require_once '../Model/Database_Operations.php';

if (isset($_POST['action1'])) {

  $firstname      = $_POST['first-name'];
  $lastname       = $_POST['last-name'];
  $gender         = $_POST['group1'];
  $date           = $_POST['date'];
  $company        = $_POST['company'];
  $description    = $_POST['short-description'];
  $street         = $_POST['street'];
  $number         = $_POST['number'];
  $postalcode     = $_POST['postalcode'];
  $city           = $_POST['city'];
  $country        = $_POST['country'];
  $homepage       = $_POST['homepage'];
  $telephone      = $_POST['telephone'];
  $fax            = $_POST['fax'];

  


  $ex = $pdo->prepare(getIdByUsername($_SESSION['name']));
  $ex->execute();
  $id = $ex->fetch();
  echo "ID: ".$id['Benutzer_Id'];


  $result1 = $pdo->prepare(insert_user_data($id['Benutzer_Id'], $firstname, $lastname, $gender, $date, $company, $description, $homepage, $telephone, $fax, null));

  $result2 = $pdo->prepare(insert_new_address($street, $number, $postalcode, $city, $country));

  $result3 = $pdo->prepare(getUserAddressId($street, $number, $postalcode, $city, $country));

  $result1->execute();
  $result2->execute();
  $result3->execute();
  $addr_id = $result3->fetch();

  $result4 = $pdo->prepare(update_user_address_by_username($_SESSION['name'], $addr_id['Adresse_Id']));
  $result4->execute();

}

if (isset($_POST['action3'])) {
  include('ResetEMailAddress.php');
}

if (isset($_POST['action2'])) {
  include('ResetPassword.php');
}

if (isset($_POST['action4'])) {
  include('DeleteAccount.php');
}

if (isset($_POST['action5'])) {
  include('CreateAssignment.php');
}

 ?>
