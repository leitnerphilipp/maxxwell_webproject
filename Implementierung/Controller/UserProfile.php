<?php

require_once '../Model/Database_Operations.php';
require_once 'ResetPassword.php';
require_once 'ResetEMailAddress.php';
require_once 'DeleteAccount.php';
require_once 'createAssignment.php';
require_once 'AdminMail.php';

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


  $id = $pdo->query(getIdByUsername($_SESSION['name']));

  $result1 = $pdo->query(insert_user_data($id, $firstname, $lastname, $gender, $date, $company, $description, $homepage, $telephone, $fax, null));
  $result2 = $pdo->query(insert_new_address($street, $number, $postalcode, $city, $country));
  $address = $pdo->query(getUserAddressId($street, $number, $postalcode, $city, $country)));
  $result3 = $pdo->query(update_user_address($_SESSION['name'], $address));

}

 ?>
