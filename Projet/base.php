<?php
  // URL of the host
  $dbhost = "localhost"; 
  
  // Name of the database
  $dbname = "database";
  
  // User name
  $dbuser = "root";
  
  // Password (not used here)
  $dbpass = "password";
 
  $connection = mysqli_connect($dbhost, $dbuser) or die("Erreur MySQL : ".mysqli_error());
  mysqli_select_db($connection, $dbname) or die("Erreur MySQL : ".mysqli_error());
 
?>