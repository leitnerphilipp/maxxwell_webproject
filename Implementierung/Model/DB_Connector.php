<?php

$servername = "mysqlsvr38.world4you.com";

$username = "sql1609210";

$password = "m*eyicr";

$db = "3810978db1";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection

if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully";

?>
