<?php

  $dbServerName = "localhost";
  $dbUsername = "";
  $dbPassword = "";
  $dbName = "";

  $connect = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

  if (!$connect) {
    echo "Not connect to the database!";
  }
?>
