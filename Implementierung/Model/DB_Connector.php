<?php

    error_reporting (E_ALL);
    ini_set ('display_errors', 'On');

  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $db = "DIPLDB";

  //try {
   $pdo = new PDO('mysql:host=127.0.0.1;dbname=DIPLDB', $username, $password);
   echo "Database connected.";
/*} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
   die();
}*/


?>
